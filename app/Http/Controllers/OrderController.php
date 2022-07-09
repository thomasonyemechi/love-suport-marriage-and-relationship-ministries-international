<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Cart;
use App\Models\Scart;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class OrderController extends MailController
{


    function processFlutterWave(Request $request)
    {

        $request->trno = rand();
        $user_info = $this->startCheckOut($request);

        if(isset($user_info['errors'])){ return back()->with('errors', do_er($user_info['errors'])); }
        $user_id = $user_info['user_id']; $tracking_id = $user_info['track_id'];

		$amount  = 50; //$request->total;




        $data = [
            "tx_ref" => $request->trno,
            "amount" => 50,
            "currency" => "USD",
            "redirect_url" => route('flutterwave-callback'),
            'customer' => [
                'email' => $request->email,
                'phonenumber' => $request->phone,
                'name' => $request->name
            ],
        ];
        $url = "https://api.flutterwave.com/v3/payments";
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer FLWSECK_TEST-83649458fea46c6faf817a95c06b3d38-X'
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 200);
        curl_setopt($curl, CURLOPT_TIMEOUT, 200);
        $response_body = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response_body, true);
        if ($err) {
            throw new \Exception($err);
        }

        if (isset($result['status']) && $result['status'] == 'success') {
            if ( isset($result['data']['link']) && $result['data']['link'] != ' ') {
                return Redirect::to($result['data']['link']);
            }
        }

        throw new \Exception('Your transaction could not processed.');

    }



    public function callback(Request $request){
    	$response = $request->all();
    	if ($response['status'] == 'successful') {
    		$status = "SUCCESS";
            // $this->sendCartNeccessaryMails($user_id, $track_id);
    	}else{
            return back()->with('error', 'An error occured while making payment, Try again');
    	}
    	//Store the transaction as per your requirement
    }


    function verifyPayment($user_id, $track_id)
    {
        $id = $user_id;
		if ($_GET['status'] == 'cancelled') { return back()->with('error', 'Transaction was cancelled, pls try again'); }
		elseif ($_GET['status'] == 'successful')
		{
			$txid = $_GET['transaction_id'];

			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"Content-Type: application/json",
					"Authorization: Bearer FLWSECK_TEST-d407f80b6790a8989c497f5202a5423a-X"
				),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			$res = json_decode($response);
			if ($res->status)
			{
                $sum = Scart::where(['user_id' => $user_id, 'track_id' => $track_id])->first();
                $user = User::find($user_id);
                if($sum->status == 0) {
                    $this->sendCartNeccessaryMails($sum->id, $user->email);
                }
                $sum->update([
                    'status' => 1
                ]);

                return back()->with('success', 'Transaction Sucessful, File attachment has been sent to your email');

			}
		}
    }




    function addItemCart(Request $request)
    {
        $val = Validator::make($request->all(), [
            'item_id' => 'required|exists:stores,id',
            'qty' => 'required|min:1|integer'
        ]);

        if ($val->fails()){ return response(['errors' => $val->errors()->all() ], 422);}
        //id, item, price,  qty, total
        $item = Store::find($request->item_id);
        $qty = $request->qty;

        $nw_item = [
            'id' => $item->id,
            'item' => $item->item,
            'price' => $item->price,
            'qty' => $qty,
            'total' => $qty * $item->price
        ];

        $basket = (session()->has('cart')) ? session()->get('cart') : [];
        $basket[] = $nw_item;

        session()->put('cart', $basket);

        return response([
            'message' => 'Item has been sucessfully added to cart',
            'data' => session()->get('cart')
        ], 200);
    }



    function startCheckOut($request)
    {
        $val = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|min:10|string'
        ]);
        if ($val->fails()){ return ['errors' => $val->errors()->all() ];}

        $data = $this->checkUser($request);

        $user_id = $data['user_id']; $billing_id = $data['billing_id'];

        $tracking_id = $this->win_hash(20);

        $scart = Scart::create([
            'user_id' => $user_id,
            'billing_id' => $billing_id,
            'trno' => $request->trno ?? 676768877878,
            'track_id' => $tracking_id,
            'status' => 0,
            'total' => $request->total ?? 0
        ]);

        $sum_id = $scart->id; $sum = 0;

        $orders = session()->get('cart');

        foreach($orders as $ord)
        {
            $ord = json_decode(json_encode($ord));
            $sum += $ord->total;
            Cart::create([
                'sum_id' => $sum_id,
                'item_id' => $ord->id,
                'item' => $ord->item,
                'price' => $ord->price,
                'quantity' => $ord->qty,
                'total' => $ord->total,
            ]);
        }

        return [
            'message' => 'Cart has been logged sucessfully, proceed to payment',
            'track_id' => $tracking_id,
            'user_id' => $user_id
        ];

    }




    function checkUser($data)
    {
        $user = User::where('email', $data->email)->first();
        if(!$user) {
            $user = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'phone' => $data->phone,
                'address' => $data->address,
                'password' => password_hash($data->phone, PASSWORD_BCRYPT)
            ]);
        }


        $bill = Billing::where(['name' => $data->name, 'phone' => $data->phone, 'address' => $data->address])->first();
        if(!$bill) {
            $bill = Billing::create([
                'user_id' => $user->id,
                'name' => $data->name,
                'phone' => $data->phone,
                'address' => $data->address,
            ]);
        }

        return [
            'user_id' => $user->id,
            'billing_id' => $bill->id
        ];
    }


    function win_hash($length)
	{
		return substr(str_shuffle(str_repeat('123456789', $length)), 0, $length);
	}


    function checkOut(Request $request) {

    }
}
