<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInventoryRequest;

class InventoryController extends Controller
{
    public function create()
    {
        return view ("inventory.create");
    }

    public function store(StoreInventoryRequest $request)
    {
        Inventory::create([
            'user_id' =>auth()->user()->id,
            'name' =>$request->name,
            'description'=>$request->description,
        ]);

        return to_route('home');
    }

    public function edit(Inventory $inventory)
    {

        return view('inventory.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update([
            'user_id' =>$inventory->user_id,
            'name' =>$request->name,
            'description'=>$request->description,
        ]);

        return to_route('home');
    }

    public function delete(Inventory $inventory)
    {
        $inventory->delete([]);

        return to_route('home');
    }  
}
