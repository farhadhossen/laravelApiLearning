<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productadd(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'description' => 'required|max:200',
            'price' => 'required',
            'qty' => 'required'
        ]);

        $products = new Product();

        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->qty = $request->qty;
        $products->save();
        //return reponse()->json(['message'='Product added successfully'], 200);

        // return response()->json(["message"=>"message'='Product added successfully"]);

        return ["message"=>"message'='Product added successfully"];

        
    }
}
