<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Identification;
use App\Contract;
use App\User;

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



    public function showForm()
    {

        return view('admin.create-supervisor');
    }


    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed'
        ]);

        User::create([
            'name' =>$request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'user_type'=>2
        ]);

       return redirect()->back()->withMessage('Supervisor created successfully');

    }


    public function showSupervisors()
    {
        $users = User::where('user_type', 2)->get();
        return view('admin.supervisors', compact('users'));
    }

    public function deleteSupervisor(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect()->back()->withMessage('Supervisor deleted successfully');
    }



    public function identificationDownload($id)
    {
        $identification = Identification::findOrFail($id);
        return view('identification', compact('identification'));
    }


    public function contractDownload($id)
    {
        $contract = Contract::findOrFail($id);
        return view('contract', compact('contract'));
    }
}
