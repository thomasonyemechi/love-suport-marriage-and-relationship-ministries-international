<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Scart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DownloadController extends Controller
{
    function makeDownload($scart_id)
    {
        $scart = Scart::find($scart_id);
        $item = $scart->items[0]->product;
        $path= 'assets/store/'.'storeitem.jpg';
        if (!File::exists($path)) {
            return response([
                'message' => 'This requested file was not found on our server'
            ], 404);
        }


        $data = [
            'message' => 'file downloaded'
        ];

        Download::create([
            'user_id' => $scart->user_id,
            'item_id' => $item->id,
            'others' => json_encode($data),
            'sum_id' => $scart->id
        ]);



        $val = $_GET['val'];
        if($val == 1) {
            return response()->download($path);
        }

   
        return [
            'path' => $path,
            'name' => $item->item
        ];
        
    }




    function regsiterDownload()
    {
        
    }


}
