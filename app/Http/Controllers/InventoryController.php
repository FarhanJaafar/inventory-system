<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function create()
    {
        return view ("inventory.create");
    }

    public function store(Request $request)
    {
        Inventory::create([
            'user_id' =>auth()->user()->id,
            'name' =>$request->name,
            'description'=>$request->description,
        ]);

        return to_route('home');
    }
}
