<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function demo()
    {
        $array = [
            [
                'name' => 'name',
                'email' => 'email',
            ],
            [
                'name' => 'obaydur',
                'email' => 'obaydur@gmail.com',
            ]
        ];
        return response()->json([
            'message'=> '2 users not found',
            'data' => $array,
            'status' => 'true'

        ], 200);
    }

}
