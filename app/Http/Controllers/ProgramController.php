<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ProgramController extends Controller
{


    function changeStatus($id){
        $event = Event::find($id);
        $new_status  = ($event->statu == 1) ? 0 : 1 ;
        $event->update([
            'status' => $new_status
        ]);
        return back()->with('success', 'Event status has been updated sucessfully');
    }
    function addEvent(Request $request)
    {
        $val = Validator::make($request->all(), [
            'name' => 'required|min:3|max:500',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($val->fails()){ return response(['errors' => $val->errors()->all() ]);}

        $ck = Event::where('name', $request->name)->count();

        if($ck > 0){ return response(['message' => 'Event with name already exists'], 409); }

        $img = 'no-image.png';

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $img = Str::slug($request->name).time().'.'.$photo->getClientOriginalExtension();
            move_uploaded_file($photo, 'assets/store/'.$img);
        }

        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $img,
            'date' => strtotime($request->date)
        ]);

        return response([
            'message' => 'Event has bee added sucessfully',
        ], 200);
    }
}
