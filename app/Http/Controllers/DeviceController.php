<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DeviceController extends Controller
{


    function search($name){
        $result = Device::where("name", "like","%".$name."%")->get();

        if(count($result)){
            return $result;
        }else{
            return ["Result"=>"No Data Found"];
        }
    }

   
    function checkValidation(Request $request){

        $rules = array(
            "member_id"=>"required",
        );

        $validator = Validator::make($request->all(),$rules);
        
        if($validator->fails()) {
                return $validator->errors();
        }else{
                $device = new Device;
                $device->name=$request->name;
                $device->member_id=$request->member_id;

                return ["result"=>"saved"];

        }


        return ["x"=>"y"];
        

    }


}

