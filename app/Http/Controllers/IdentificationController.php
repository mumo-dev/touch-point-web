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
        $ident =Identification::create([
            'salesagent_name'=>$request->salesagent_name,
            'salesagent_zone'=>$request->salesagent_zone,
            'salesagent_phone'=>$request->salesagent_phone,
            'pos_name'=>$request->pos_name,
            'pos_address'=>$request->pos_address,
            'owner_name'=>$request->owner_name,
            'owner_phone'=>$request->owner_phone,
            'businesspermit_number'=>$request->businesspermit_number,
            'kra_pin'=>$request->kra_pin,
            'supervisor_name'=>$request->supervisor_name,
            'supervisor_phone'=>$request->supervisor_phone,
            'number_cni_supervisor'=>$request->number_cni_supervisor,
            'cashier1_name'=>$request->cashier1_name,
            'cashier1_phone'=>$request->cashier1_phone,
            'cni_cashier1'=>$request->cni_cashier1,
            'cashier2_name'=>$request->cashier2_name,
            'cashier2_phone'=>$request->cashier2_phone,
            'cni_cashier2'=>$request->cni_cashier2,
            'cashier3_name'=>$request->cashier3_name,
            'device_imei'=>$request->device_imei,
            'device_serial_no'=>$request->device_serial_no,
            'surface_room'=>$request->surface_room,
            'products_type'=>$request->products_type,
            'core_business'=>$request->core_business,
            'secondary_activity'=>$request->secondary_activity,
            'employees_no'=>$request->employees_no,
            'waiting_room'=>$request->waiting_room,
            'computer_available'=>$request->computer_available,
            'services_to_market'=>$request->services_to_market,
            'payment_phone_number'=>$request->payment_phone_number,
            'payment_amount'=>$request->payment_amount,
            'payment_goods_refno'=>$request->payment_goods_refno,
            'topology_of_point'=>$request->topology_of_point,
            'user_id'=>$request->user_id
        ]);
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
