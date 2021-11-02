<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   
        $user_type = Item::with('category')->whereHas('user', 
                fn($q) => $q->where('user_id', Auth::user()->id)
            )
            ->get()
            ->groupBy('category.type_id');
      
        return view('dashboard')->with([
            'types' => Type::all(),
            'user_type' => $user_type
        ]);
    }
}
