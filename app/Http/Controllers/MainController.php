<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function demos(Request $request){
        $peoples = [
            [
                "name"=> "name",
                "father Name"=> "fatherName",
                "phone"=> "phone",
            ],
            [
                "name"=> "obaydur Rahman Rifat",
                "fatherName"=> "Rafiq Sorder",
                "phone"=> "0920920390230",
            ]
            
        ];
        return response()->json([
            'Total People' => count($peoples),
            'date'=> $peoples,
            'status' => 'true',
        ]);
    }

    public function mainusers(){
        $users = User::all();
        return response()->json([
            'Total User'=> count($users),
            'date'=> $users,
        ]);
    }

    public function show($id){
        $User = User::find($id);
        if($User != null){
            return response()->json([
                'Number of user'=> 'Recoud Found',
                'data'=> $User,
                'stutus'=> true,
            ]);
        }else{
            return response()->json([
                'Number of user' => 'Recourd no found',
                'data' => [],
                'status' => true,
            ]);
        }
    }
}
