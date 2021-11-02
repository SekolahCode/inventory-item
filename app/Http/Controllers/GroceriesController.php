<?php

namespace App\Http\Controllers;

use App\Models\SubType;
use App\Models\Type;
use App\Models\UserItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroceriesController extends Controller
{
    public function index()
    {
        return view('groceries')->with([
            'types' => Type::all(),
        ]);
    }

    public function create()
    {
        $type = Type::withCount('item')->get();

        dd($type);
        // dd(Item::with('category')->whereHas('user', fn($q) => $q->where('user_id', Auth::user()->id))->get()->groupBy('category.type_id'));
        // return view('forms.groceries')->with([
        //     'types' => 
        //     'sub_types' => SubType::with('item')->whereHas('item')->get(),
        //     'user_item' => UserItem::where('user_id', Auth::user()->id)->get()->pluck('item_id')
        // ]);
    }

    public function store(Request $request)
    {
        collect($request->items)->each(function($item, $key){
            UserItem::create([
                'user_id' => Auth::user()->id,
                'item_id' => $item
            ]);
        });
       
        return redirect()->route('items.index');
    }

    public function edit()
    {
        
    }
}
