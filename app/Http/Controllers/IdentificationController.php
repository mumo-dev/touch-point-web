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
        $contract = Contract::create([
            'commercial_name'=>$request->commercial_name,
            'dob'=>$request->dob,
            'place_of_birth'=>$request->place_of_birth,
            'corporate_name'=>$request->corporate_name,
            'name_and_position_ccr'=>$request->name_and_position_ccr,
            'type_and_number_of_id'=>$request->type_and_number_of_id,
            'address'=>$request->address,
            'business_name'=>$request->business_name,
            'pin_number'=>$request->pin_number,
            'reg_no_of_business'=>$request->reg_no_of_business,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'date'=>$request->date,
            'name'=>$request->name,
            'user_id'=>$request->user_id
        ]);


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
