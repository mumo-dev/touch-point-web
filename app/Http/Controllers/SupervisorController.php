<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Identification;
use App\Contract;
class SupervisorController extends Controller
{


    public function index()
    {
        $identifications = Identification::all();
        return view('supervisor.index', compact('identifications'));
    }

    public function showIdentification($id)
    {
        $identification = Identification::findOrFail($id);
        return view('supervisor.identification', compact('identification'));
    }

    public function contracts()
    {
        $contracts = Contract::all();
        return view('supervisor.all-contracts', compact('contracts'));
    }

    public function showContract($id)
    {
        $contract = Contract::findOrFail($id);
        return view('supervisor.contract', compact('contract'));
    }

    public function showForm()
    {

        return view('supervisor.create-agent');
    }


    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        User::create([
            'name' =>$request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

       return redirect()->back()->withMessage('Agent created successfully');

    }


    public function showAgents()
    {
        $users = User::where('user_type', 0)->get();
        return view('supervisor.agents', compact('users'));
    }

    public function deleteAgent(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect()->back()->withMessage('Agent deleted successfully');
    }
}
