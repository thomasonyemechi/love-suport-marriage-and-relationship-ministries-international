<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonyController extends Controller
{

    function updateTestimonyStatus($id)
    {
        $testimony = Testimony::find($id);
        $status = ($testimony->status == 0) ? 1 : 0 ;
        $msg = ($testimony->status == 0) ? 'Testimony will be shown on the home page' : 'Testimony has been removed from home page' ;
        $$testimony->update([ 'status' => $status ]);
        return back()->with('success', $msg);
    }

    function editTestimony(Request $request)
    {
        $val = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:50',
            'testimony' => 'required|string|min:3',
            'photo' => 'image'
        ]);

        $testimony = Testimony::find($request->testimony_id);
        $name = $testimony->photo; $oldname = $testimony->photo;
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $name = $request->name.'_'.time().rand().'.'.$extension;
            move_uploaded_file($file, 'assets/images/testimonials/'.$name);
            unlink('assets/images/testimonials/'.$oldname);
        }

        $testimony->update([
            'name' => $request->name,
            'testimony' => $request->testimony,
            'photo' => $name
        ]);
        return back()->with('success', 'Testimony has been updated sucessfully');
    }




    function addTestimony(Request $request)
    {
        $val = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:50',
            'testimony' => 'required|string|min:3',
            'photo' => 'image'
        ]);

        $name = '';
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $name = $request->name.'_'.time().rand().'.'.$extension;
            move_uploaded_file($file, 'assets/images/testimonials/'.$name);
        }

        Testimony::create([
            'name' => $request->name,
            'testimony' => $request->testimony,
            'photo' => $name
        ]);

        return back()->with('success', 'Testimony has been added to database');
    }
}
