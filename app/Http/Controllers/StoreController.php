<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StoreController extends Controller
{

    function fetchStoreItem()
    {
        $items = Store::orderby('id', 'desc')->paginate(100);
        return response([
            'data' => $items
        ]);
    }

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
            'slug' => Str::slug($request->item),
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
        Store::where('id', $id)->delete();
        return back()->with('success','Item has been deleted scuessfully');
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

        if ($val->fails()){ return response(['errors' => $val->errors()->all() ], 422);}
        $slug = Str::slug($request->item);


        $photo = 'no_image.png';
        if($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo = $slug.'_img_'.time().rand().'.'.$img->getClientOriginalExtension();
            move_uploaded_file($img, 'assets/store/'.$photo);
        }

        $snippet = 'no_image.png';
        if($request->hasFile('snippet')) {
            $snip = $request->file('snippet');
            $file = $slug.'_snippet_'.time().rand().'.'.$snip->getClientOriginalExtension();
            move_uploaded_file($snip, 'assets/store/'.$file);
        }


        $file = 'no_image.png';
        if($request->hasFile('file')) {
            $main = $request->file('file');
            $file = $slug.'_file_'.time().rand().'.'.$main->getClientOriginalExtension();
            move_uploaded_file($main, 'assets/store/'.$file);
        }


        Store::create([
            'slug' => $slug,
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

        return response([
            'message' => 'Item has been added sucessfully'
        ]);
        // return back()->with('error', 'Item has been added sucessfully');

    }
}
