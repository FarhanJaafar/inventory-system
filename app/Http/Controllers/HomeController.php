<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->keyword){
            $inventories = auth()->user()->inventories()->where('name', 'LIKE', '%'.$request->keyword.'%')
            ->paginate(3);
            
        }else{
            $inventories = auth()->user()->inventories()->paginate(3);
        }
        return view('home', compact ('inventories'));

    }
}
