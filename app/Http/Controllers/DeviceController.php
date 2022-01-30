<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{


    // function update(Request $request){

    //     $device = Device::find($request->id);
    //     // $device->name = $request->name;
    //     $device->member_id = $request->member_id;
    //     $result = $device->save();

    //     if($result){
    //         return ["result"=>"Done"];
    //     }else{
    //         return ["result"=>"Failed"];
    //     }
    //     // return ["result"=>"inserted"];
    // }

    // function search($name){
    //     $result = Device::where("name", "like","%".$name."%")->get();

    //     if(count($result)){
    //         return $result;
    //     }else{
    //         return ["Result"=>"No Data Found"];
    //     }
    // }

    function delete($id){

        $device = Device::find($id);

        if(!$device){
            return ["Result"=>"Not Found"];
        }

        $result = $device->delete();

        if($result){
            return ["Result"=>"Deleted"];
        }
        else{
            return ["Result"=>"Failed"];
        }

       
    }

}
