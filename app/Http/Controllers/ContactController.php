<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    function sendContactMessage(Request $request)
    {
        $val = Validator::make($request->all(), [
            'full_name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'phone' => 'required|string|max:30',
            'message' => 'required|string'
        ]);

        if ($val->fails()){ return response(['errors'=>$val->errors()->all()], 422);}

        Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);


        return response([
            'message' => 'Your message have been sucessfully sent, we will reachout to you!'
        ]);

    }
}
