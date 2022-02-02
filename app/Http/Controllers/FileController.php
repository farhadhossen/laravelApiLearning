<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    function Upload(Request $request){


        $result= $request->file('myfile')->store('apimyimages');
        return ["result"=>" $result"];
    }
}
