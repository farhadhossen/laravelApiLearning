<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{


    function update(Request $request){

        $device = Device::find($request->id);
        // $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();

        if($result){
            return ["result"=>"Done"];
        }else{
            return ["result"=>"Failed"];
        }
        // return ["result"=>"inserted"];
    }

}
