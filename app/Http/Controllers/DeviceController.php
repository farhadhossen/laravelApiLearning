<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    function list()
    {

        ///model create korte hobe, database create korte hobe age'
        return device::all();
    }

    function getNestedJson(){
        $res = Device::with('getMember:member_id');
        return $res->Select(['id','name','member_id'])->get();
      }
}
