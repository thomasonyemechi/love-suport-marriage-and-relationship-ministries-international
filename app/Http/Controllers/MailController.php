<?php

namespace App\Http\Controllers;

use App\Models\Scart;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    function sendCartNeccessaryMails($sum_id, $email)
    {
        $data["email"] = $email;
        $data["title"] = 'Item Purchase From '.env('APP_NAME');
        $data["body"] = "Purchased item attachment files";

        $sum = Scart::find($sum_id);
        $files = [];
        foreach($sum->items as $item){
            $item = $item->item;
            if($item->delivery == 1) {
                $file[] = public_path('assets/store/'.$item->main_url);
            }
        }


        Mail::send('purchasemail', $data, function($message)use($data, $files) {
            $message->to($data["email"], $data["email"])->subject($data["title"]);
            foreach ($files as $file){
                $message->attach($file);
            }
        });
    }




}
