<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\InventoryType;
use App\Models\InventoryStock;
use App\Http\Requests\StoreInventoryRequest;

class InventoryController extends Controller
{
    public function create()
    {
        $inventoryTypes = InventoryType::all();
        return view ('inventory.create', compact('inventoryTypes'));
    }

    public function store(StoreInventoryRequest $request)
    {
        $inventory = Inventory::create([
            'user_id' =>auth()->user()->id,
            'name' =>$request->name,
            'description'=>$request->description,
            'inventory_type_id'=>$request->inventory_type_id
        ]);
        //dd($inventory);
        InventoryStock::create([
            'inventory_id' =>$inventory->id,
            'color' =>$request->color,
            'quantity'=>$request->quantity
        ]);

        return to_route('home');
    }

    public function edit(Inventory $inventory)
    {
        $inventoryTypes=InventoryType::all();
        return view('inventory.edit', compact('inventory', 'inventoryTypes'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update([
            'user_id' =>$inventory->user_id,
            'name' =>$request->name,
            'description'=>$request->description,
            'inventory_type_id'=>$request->inventory_type_id
        ]);

        $stock = InventoryStock::where('inventory_id', $inventory->id);

        $stock->update([
            'color' =>$request->color,
            'quantity'=>$request->quantity
        ]);

        return to_route('home');
    }

    public function delete(Inventory $inventory)
    {

        $inventory->inventoryStock()->delete();
        $inventory->delete();

        return to_route('home');
    }

    public function show(Inventory $inventory)
    {
        $inventoryStocks = $inventory->inventoryStock;
        return view('inventory.show', compact('inventory','inventoryStocks'));
    }



}
