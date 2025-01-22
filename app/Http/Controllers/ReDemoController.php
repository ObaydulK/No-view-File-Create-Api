<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReDemoController extends Controller
{
    //
    public function redemo(){
        $array = [
            [
            "name"=> "name",
            "email"=> "email",
            "password"=> "password",
            ],
            [
                "name"=> "obayul",
                "email"=> "email@gmail.com",
                "password"=> "password",
            ]
        ];
        
        return response()->json([
            'message' => '3 Date',
            'data' => $array,
            'status' => 'true'
        ], 200);
 

    }

    public function moredemo(){
        $array = [
            [
                'product_name' => 'product_name',
                'product_description'=> 'product_description',
                'product_price'=> 'product_price',
            ],
            [
                'product_name'=> 'T-Shart',
                'product_description'=> 'this looking gorgies, and 135 gsm',
                'product_price'=> '$30',
            ]
        ];
        return response()->json([
            'message' => 'hellow',
            'data'=> $array,
            'status'=> 'true'
        ], 200);
    }
}