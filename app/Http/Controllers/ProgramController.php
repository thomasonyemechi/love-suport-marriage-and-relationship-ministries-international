<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ProgramController extends Controller
{


    function delelteEvent($id)
    {
        Event::where('id', $id)->delete();
        return back()->with('success', 'Event has been deleted scuessfully');
    }


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
            'event' => 'required|min:3|max:500|unique:events,name',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'description' => 'required|string'
        ]);

        if($val->fails()) { return back()->with('error', do_er($val->errors()->all()) );  }

        $img = 'no-image.png';
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $img = Str::slug($request->event).time().'.'.$photo->getClientOriginalExtension();
            move_uploaded_file($photo, 'assets/store/'.$img);
        }

        Event::create([
            'name' => $request->event,
            'tag' => $request->tags ?? 'Relationship',
            'description' => $request->description,
            'photo' => $img,
            'date' => strtotime($request->date)
        ]);

        return back()->with('success', 'Event has been added sucesfully');
    }
}
