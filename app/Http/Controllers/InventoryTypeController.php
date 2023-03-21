<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryType;

class InventoryTypeController extends Controller
{
    public function index()
    {
        $inventoryTypes = InventoryType::all();
        return view('inventorytype.index', compact('inventoryTypes'));
    }

    public function create()
    {
        return view('inventorytype.create');
    }

    public function store(Request $request)
    {
        InventoryType::create([
            'name' => $request->name 
        ]);

        return to_route('inventorytype.index');
    }

    
}

