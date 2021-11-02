<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\UserItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserItemsController extends Controller
{
    public function index(){

        $unavailable_items = Item::with('category')
            ->whereHas('user', 
                fn($q) => $q->where('user_id', Auth::user()->id)
                    ->where('status', false)
            )
            ->get()
            ->groupBy('category.name');
        
        $available_items = Item::with('category')
            ->whereHas('user', 
                fn($q) => $q->where('user_id', Auth::user()->id)
                    ->where('status', true)
            )
            ->get()
            ->groupBy('category.name');

        return view('user-items')->with([
            'unavailable_items' => $unavailable_items,
            'available_items'   => $available_items
        ]);
    }

    public function update(Request $request)
    {

        if($request->availability == 'true') {
            UserItem::whereIn('item_id', $request->items)->where('user_id', Auth::user()->id)->update(['status' => true]);
        }else{
            UserItem::whereIn('item_id', $request->items)->where('user_id', Auth::user()->id)->update(['status' => false]);
        }

        return redirect()->route('items.index');
    }
}
