<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    //


    function getNestedJson(){
        $res = Device::with('getMember:member_id'); //filter from in herited
        return $res->Select(['id','name','member_id'])->get(); //filter from maain
      }

      function getIndividual(){
        $name = "b";                    

        $getMemberId = DB::table('members')
        ->select('member_id')
        ->where('name',$name)
        ->get();

        $post = DB::table('devices')
        ->select('*')
        ->where('member_id',$getMemberId->pluck('member_id'))
        ->get();

        //$terget=$getMemberId->pluck('member_id');

        return $post;
      }



}
