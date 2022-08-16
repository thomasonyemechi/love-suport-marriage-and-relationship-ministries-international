<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OwnerController extends Controller
{
    function ownerLogin(Request $request)
    {

        $val = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required|string|min:3',
        ]);

        if ($val->fails()){ return back()->with(['error' => do_er($val->errors()->all()) ]);}



        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->with(['error' => 'Invalid Login Credentials']);
        }


        return redirect('control/')->with('success', 'Login Sucessfull');



    }
}
