<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class SupervisorController extends Controller
{


    public function index()
    {
        return view('supervisor.index');
    }

    public function showForm()
    {

        return view('supervisor.create-agent');
    }


    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        User::create([
            'name' =>$request->name,
            'email' => $request->email,
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
