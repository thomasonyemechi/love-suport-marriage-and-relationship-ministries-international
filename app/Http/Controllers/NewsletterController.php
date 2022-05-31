<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    function addEmail(Request $request)
    {
        $val = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email'
        ]);
        if ($val->fails()){ return response(['errors'=>$val->errors()->all()], 422);}
        Newsletter::create([
            'email' => $request->email
        ]);

        return response([
            'message' => 'Subscription to newsletter was sucessful'
        ], 200);
    }

    function removeEmail(Request $request)
    {
        $val = Validator::make($request->all(), [
            'email' => 'required|exists:newsetter,email'
        ]);
        if ($val->fails()){ return response(['errors'=>$val->errors()->all()], 422);}
        Newsletter::where('email', $request->email)->delete();

        return response([
            'message' => 'Email has been removed from subscription list'
        ], 200);
    }
}
