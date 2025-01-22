<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function userdata(){
        $users = User::all();

        return response()->json([
            'message' => count($users),
            'data'=> $users,
            'status'=> 'true'
        ]);
    }

    public function singledata($id){
        $User = User::find($id);
        if ($User != null) {
            return response()->json([
                'message'=> 'data found',
                'data' => $User,
                'status'=> true,
            ]);
            # code...
        } else {
             return response()->json([
                'message' => 'Data no found',
                'data'=> [],
                'status'=> true
             ]);
        }
        
    }

}
