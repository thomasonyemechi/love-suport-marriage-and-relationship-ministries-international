<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Cart;
use App\Models\Scart;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //

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



    function startCheckOut(Request $request)
    {
        $val = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|min:10|string'
        ]);
        if ($val->fails()){ return response(['errors' => $val->errors()->all() ], 422);}

        $data = $this->checkUser($request);

        $user_id = $data['user_id']; $billing_id = $data['billing_id']; $trno = $this->win_hash(17);

        $tracking_id = $this->win_hash(20);

        $scart = Scart::create([
            'user_id' => $user_id,
            'billing_id' => $billing_id,
            'trno' => $trno,
            'track_id' => $tracking_id,
            'status' => 0
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


        $scart->update([
            'total' => $sum
        ]);

        return response([
            'message' => 'Cart has been logged sucessfully, proceed to payment',
            'track_id' => $tracking_id
        ], 200);

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
