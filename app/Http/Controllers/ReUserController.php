<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class ReUserController extends Controller
{
    //
    public function reuserdata(){
        $users = User::all();
        return response()->json([
            'Total Data' => count($users),
            'data' => $users,
        ]);
    
    }

    public function stores(Request $request){
        $validator = Validator::make($request->all(),[
                "name" => "required",
                "email"=> "required",
        ]);

        if($validator->fails()){
            return response()->json([
                "message" => "fixed erreos",
                "errors" => $validator->errors(),
                "status" => false,
            ]);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json([
            "message"=> "user add succes",
            "data"=> $user,
            "status"=> true,
        ]);
    }

}
