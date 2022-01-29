<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{


    function add(request $request)
    {
        $device = new Device;
        $device -> name = $request->name;
        $device -> member_id = $request->member_id;
        $result = $device -> save();

        if($result){
            return ["Result" => "Data has been saved"];
        }
        else{
            return ["Result" => "Data has not been saved"];
        }

        
    }

}
