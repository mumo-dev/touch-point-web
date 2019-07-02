<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identification;
use App\Contract;

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
    public function index()
    {
         $identifications = Identification::all();
        return view('admin.index', compact('identifications'));
    }


    public function showIdentification($id)
    {
        $identification = Identification::findOrFail($id);
        return view('admin.identification', compact('identification'));
    }

    public function contracts()
    {
        $contracts = Contract::all();
        return view('admin.all-contracts', compact('contracts'));
    }

    public function showContract($id)
    {
        $contract = Contract::findOrFail($id);
        return view('admin.contract', compact('contract'));
    }
}
