<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Identification;
use App\Contract;
use Carbon\Carbon;

class IdentificationController extends Controller
{

    public function __construct()
    {
    //    $this->middleware('auth:api');
    }


    public function storeContract(Request $request)
    {
        // $ymd = DateTime::createFromFormat('Y-m-d', '10-16-2003')->format('Y-m-d');
        $contract = Contract::create($request->all());

        return response()->json([
            'id' => $contract->id,
            'message'=>'successfully created'
        ]);



    }


    public function storeContractImage(Request $request)
    {

        $destinationPath = public_path('/images');
        $image = $request->file('image');
        $imagename = uniqid(). '.' . $image->getClientOriginalExtension();

        $image->move($destinationPath, $imagename);

        $contract =  Contract::find($request->id);
        $contract->update(['signature_url'=>$imagename]);

        return response()->json([
            'message'=>'successfully created'
        ]);


    }

    public function storeIdentification(Request $request)
    {
        $ident =Identification::create($request->all());
        return response()->json([
            'id'=> $ident->id,
            'message'=>'successfully created'
        ]);
    }


    public function storeIdentificationImage(Request $request)
    {
        $destinationPath = public_path('/images');
        $image = $request->file('image');
        $imagename = uniqid(). '.' . $image->getClientOriginalExtension();

        $image->move($destinationPath, $imagename);

        $identification =  Identification::find($request->id);
        $identification->update(['signature_url'=>$imagename]);

        return response()->json([
            'message'=>'successfully created'
        ]);
    }
}
