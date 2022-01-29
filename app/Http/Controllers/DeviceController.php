<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    function list($id)
    {

        ///model create korte hobe, database create korte hobe age'
        return Device::find($id);
    }
}
