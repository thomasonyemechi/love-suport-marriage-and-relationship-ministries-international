<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    function addItemCart(Request $request)
    {
        //id, item, price,  qty, total
        $item = Store::find($request->item_id);
        $qty = $request->qty;

        $nw_item = [
            'id' => $item->id,
            'item' => $item->item,
            'price' => $item->price,
            'qty' => $qty,
            'total' => $qty * $item->price
        ];

        $basket = (session()->has('cart')) ? session()->get('cart') : [];
        $basket[] = $nw_item;

        session()->put('cart', $basket);

        return $basket;
    }
}
