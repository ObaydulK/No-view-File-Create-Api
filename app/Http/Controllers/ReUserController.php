<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

}
