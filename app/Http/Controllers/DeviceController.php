<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{


    function deleteSingleData($id){
        //$result = Device::findOrFail($id)->delete(); //it  also working 

        $device = Device::find($id);

        if(!$device){
            return ["Result"=>"$id id not found"];
        }
    
        
            $result = $device ;

            if($result){
                return ["Result"=>"$id id deleted"];
            }
            else{
                return ["Result"=>"$id id deleted failed"];
            }

            
       
        
        
    }

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

    function multipleDelete($data){

        $deleteStatus = ["Result"=>""];

        foreach($data as $id) 
        { 
            $device = Device::find($id);
            if(!$device){
                $deleteStatus = ["Result"=>"$id id not found"];
                continue;
            }
           $data->delete();
           $deleteStatus = ["Result"=>"$id id deleted"];
        }

        return $deleteStatus;

        // $count = 0;

        // foreach($data as $id){


        //     delete2($id);            

        // }
    }



}

function delete2($id){

    $device = Device::find($id);

    return ["Result"=> "$device"];

    // if(!$device){
    //    // continue;
    // }

    // $result = $device->delete();

    // if($result){
    //     return ["Result"=>"Deleted"];
    // }
    // else{
    //     return ["Result"=>"Failed"];
    // }

   
}
