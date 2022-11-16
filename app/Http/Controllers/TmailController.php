<?php

namespace App\Http\Controllers;

use App\Mail\Tmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class TmailController extends Controller
{
    function sendToMe(Request $request)
    {

        // return response([
        //     'message' => 'You got here'
        // ]);
        $val = Validator::make($request->all(), [
            'name' => 'string|required',
            'email' => 'string|required|email',
            'phone' => 'string|required',
            'message' => 'string|required',
        ]);
        if ($val->fails()) {
            return response([
                'errors' => $val->errors()->all()
            ], 422);
        }
        Mail::to('thomasonyemechi03@gmail.com')->send(new Tmail($request->name, $request->email, $request->phone, $request->message));
    }
}
