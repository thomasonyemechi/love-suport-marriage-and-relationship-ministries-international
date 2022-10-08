<?php

namespace App\Http\Controllers;

use App\Mail\Purchase;
use App\Models\Cart;
use App\Models\Scart;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PaypalController extends OrderController
{
    function __construct()
    {
        $this->paypalURL =  'https://api-m.sandbox.paypal.com/v1/';
        $this->paypalClientID = 'AahsFaUOjZrkvbYTfGiXw7IuEkyUiYcTRr7G7Nrhd2rpYeIcRJkZ5shFoOSKQ_JTW2iXlMCyQpuDOh41';
        $this->paypalSecret = 'EIoAY-g86JZRRVgIz5tCLq4NnCpFlE5hr7RBSVXq7gMEVTgwjaxpsU8q4J3S1xlCsXxzPqzUo3xFY7M9';
        $this->access_token = '';
    }

    function createPayment(Request $request)
    {
        $val = Validator::make($request->all(), [
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'phone' => 'required|string',
        ])->validate();
        $dat = $this->startPayPalPayment($request);
        $item = json_decode(json_encode($dat['item']));
        $invoice = $dat['track_id'];
        // return $item;

        // exit;


        $token = $this->getToken();
        $access_token = $token->access_token;
        session()->put('ac_tn', $access_token);
        $headers = [
            'Authorization: Bearer ' . $access_token,
            'Content-Type: application/json'
        ];



        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->paypalURL . 'payments/payment',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{
                "intent": "sale",
                "payer": {
                    "payment_method": "paypal"
                },
                "transactions": [
                    {
                        "amount": {
                            "total": "'.$item->price.'",
                            "currency": "USD",
                            "details": {
                                "subtotal": "'.$item->price.'",
                                "tax": "0.00",
                                "shipping": "0.00",
                                "handling_fee": "0.00",
                                "shipping_discount": "0.00",
                                "insurance": "0.00"
                            }
                        },
                        "description": "Payment For Item Purchased From '.env('APP_NAME').'.",
                        "custom": "EBAY_EMS_90048630024435",
                        "invoice_number": "'.$invoice.'",
                        "payment_options": {
                            "allowed_payment_method": "INSTANT_FUNDING_SOURCE"
                        },
                        "soft_descriptor": "ECHI5786786",
                        "item_list": {
                            "items": [
                                {
                                    "name": "'.$item->item.'",
                                    "description": "'.$item->item.'",
                                    "quantity": "1",
                                    "price": "'.$item->price.'",
                                    "tax": "0.00",
                                    "sku": "1",
                                    "currency": "USD"
                                }
                            ],
                            "shipping_address": {
                                "recipient_name": "custom",
                                "line1": "4thFloor",
                                "line2": "unit#34",
                                "city": "SAn Jose",
                                "country_code": "US",
                                "postal_code": "95131",
                                "phone": "011862212345678",
                                "state": "CA"
                            }
                        }
                    }
                ],
                "note_to_payer": "Contact us for any questions on your order.",
                "redirect_urls": {
                    "return_url": "https://familyconcepts1.com/approve_pay/'.$invoice.'",
                    "cancel_url": "https://familyconcepts1.com/cancel_payment"
                }
            }',
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($response);
        session()->put('p_al', $res);
        return redirect($res->links[1]->href);
    }



    function approvePayment($track_id)
    {
        $access_token = session()->get('ac_tn');
        $sum = Scart::where(['track_id' => $track_id])->first();
        if($sum->status != 0) {
            return redirect('/');
        }
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $access_token,
        ];
        $payer_id = $_GET['PayerID'];
        $payment_id = $_GET['paymentId'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->paypalURL . 'payments/payment/' . $payment_id . '/execute',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{
                "payer_id": "' . $payer_id . '"
            }',
            CURLOPT_HTTPHEADER => $headers,
        ));


        $response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($response);
        if($res->state == 'approved'){
            $sum->update([
                'status' => 1
            ]);
            $this->sendMail($sum->user_id, $sum->items[0]->id);
        }
        return redirect('/checkout_sucessfull/'.$track_id);
    }






    function getToken()
    {
        $at = base64_encode($this->paypalClientID . ':' . $this->paypalSecret);
        $headers = [
            'Authorization: Basic ' . $at
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->paypalURL . 'oauth2/token?grant_type=client_credentials',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($response);
        return $res;
    }



    function sendMail($user_id, $item_id)
    {
        $user = User::find($user_id);
        $item = Store::find($item_id);
        Mail::to($user->email)->send(new Purchase($user, $item));
    }


    function startPayPalPayment($request)
    {
        $data = $this->checkUser($request);
        $user_id = $data['user_id'];
        $billing_id = $data['billing_id'];
        $tracking_id = $this->win_hash(20);

        $scart = Scart::create([
            'user_id' => $user_id,
            'billing_id' => $billing_id,
            'trno' => $this->win_hash(20),
            'track_id' => $tracking_id,
            'status' => 0,
            'total' => $request->total ?? 0
        ]);

        $sum_id = $scart->id;
        $ord = Store::find($request->item_id);
        $cart = Cart::create([
            'sum_id' => $sum_id,
            'item_id' => $ord->id,
            'item' => $ord->item,
            'price' => $ord->price,
            'quantity' => $request->qty,
            'total' => $ord->price,
        ]);


        return [
            'track_id' => $tracking_id,
            'user_id' => $user_id,
            'item' => $ord
        ];
    }
}
