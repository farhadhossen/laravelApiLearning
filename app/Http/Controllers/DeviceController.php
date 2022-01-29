<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    // function list($id=null)
    // {

    //     ///model create korte hobe, database create korte hobe age'
    //     return $id?Device::find($id):Device::all();
    // }

    function getListByName($name=null)
    {

        return $name?Device::where('name',$name)->first():Device::all();
    }
}
