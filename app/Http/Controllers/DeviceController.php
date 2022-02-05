<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //


    function getNestedJson(){
        $res = Device::with('getMember:member_id'); //filter from in herited
        return $res->Select(['id','name','member_id'])->get(); //filter from maain
      }



}
