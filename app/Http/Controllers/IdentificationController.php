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
        $destinationPath = public_path('/images');
        $image = $request->file('image');
        $imagename = uniqid(). '.' . $image->getClientOriginalExtension();

        $image->move($destinationPath, $imagename);
        // $ymd = DateTime::createFromFormat('Y-m-d', '10-16-2003')->format('Y-m-d');
        Contract::create(array_merge($request->except('image'), ['signature_url'=>$imagename]));


        return response()->json([
            'message'=>'successfully created'
        ]);



    }

    public function storeIdentification(Request $request)
    {

        $destinationPath = public_path('/images');
        $image = $request->file('image');
        $imagename = uniqid(). '.' . $image->getClientOriginalExtension();

        $image->move($destinationPath, $imagename);
        Identification::create(array_merge($request->except('image'), ['image_url'=>$imagename]));

        return response()->json([
            'message'=>'successfully created'
        ]);
    }
}
