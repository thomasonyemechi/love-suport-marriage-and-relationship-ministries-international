<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{

    function editStoreItem(Request $request)
    {
        $val = Validator::make($request->all(), [
            'item' => 'required|string|min:3|max:200',
            'price' => 'required|min:0',
            'description' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
            'delivery' => 'required',
            'snippet' => 'mimes:jpeg,png,jpg,gif,svg,pdf,mp3,mp4,docx',
            'file' => 'mimes:jpeg,png,jpg,gif,svg,pdf,mp3,mp4,docx'
        ]);
        if ($val->fails()){ return response(['errors' => $val->errors()->all() ]);}

        $item = Store::find($request->item_id);




        $photo = $item->photo;
        if($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo = $request->item.'_img_'.time().rand().'.'.$img->getClientOriginalExtension();
            move_uploaded_file($img, 'assets/store/'.$photo);
            if($item->photo != 'no_image.png') { unlink('assets/store/'.$item->photo); }
        }

        $snippet = $item->snippet;
        if($request->hasFile('snippet')) {
            $snip = $request->file('snippet');
            $file = $request->item.'_snippet_'.time().rand().'.'.$snip->getClientOriginalExtension();
            move_uploaded_file($snip, 'assets/store/'.$file);
            if($item->snippet != 'no_image.png') { unlink('assets/store/'.$item->snippet); }
        }


        $file = $item->main_url;
        if($request->hasFile('file')) {
            $main = $request->file('file');
            $file = $request->item.'_file_'.time().rand().'.'.$main->getClientOriginalExtension();
            move_uploaded_file($main, 'assets/store/'.$file);
            if($item->main_url != 'no_image.png') { unlink('assets/store/'.$item->main_url); }

        }


        $item->update([
            'item' => $request->item,
            'price' => $request->price,
            'description' => $request->description,
            'more' => $request->details,
            'type' => $request->type,
            'photo' => $photo,
            'url' => $photo,
            'snippet' => $snippet,
            'main_url' => $file,
            'on_del' => $request->delivery,
        ]);


        return back()->with('error', 'Item updated sucessfully');


    }


    function deleteStoreItem($id)
    {
        return back()->with('Item has been deleted scuessfully');
    }



    function addItemToStore(Request $request)
    {
        $val = Validator::make($request->all(), [
            'item' => 'required|string|min:3|max:200|unique:stores,item',
            'price' => 'required|min:0',
            'description' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
            'delivery' => 'required',
            'snippet' => 'mimes:jpeg,png,jpg,gif,svg,pdf,mp3,mp4,docx',
            'file' => 'mimes:jpeg,png,jpg,gif,svg,pdf,mp3,mp4,docx'
        ]);

        if ($val->fails()){ return response(['errors' => $val->errors()->all() ]);}




        $photo = 'no_image.png';
        if($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo = $request->item.'_img_'.time().rand().'.'.$img->getClientOriginalExtension();
            move_uploaded_file($img, 'assets/store/'.$photo);
        }

        $snippet = 'no_image.png';
        if($request->hasFile('snippet')) {
            $snip = $request->file('snippet');
            $file = $request->item.'_snippet_'.time().rand().'.'.$snip->getClientOriginalExtension();
            move_uploaded_file($snip, 'assets/store/'.$file);
        }


        $file = 'no_image.png';
        if($request->hasFile('file')) {
            $main = $request->file('file');
            $file = $request->item.'_file_'.time().rand().'.'.$main->getClientOriginalExtension();
            move_uploaded_file($main, 'assets/store/'.$file);
        }


        Store::create([
            'item' => $request->item,
            'price' => $request->price,
            'description' => $request->description,
            'more' => $request->details,
            'type' => $request->type,
            'photo' => $photo,
            'url' => $photo,
            'snippet' => $snippet,
            'main_url' => $file,
            'on_del' => $request->delivery,
            'status' => 1
        ]);


        return back()->with('error', 'Item has been added sucessfully');



    }
}
