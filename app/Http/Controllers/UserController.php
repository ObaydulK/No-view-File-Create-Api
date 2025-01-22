<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    //
    public function userdata()
    {
        $users = User::all();

        return response()->json([
            'message' => count($users),
            'data' => $users,
            'status' => 'true'
        ]);
    }

    public function singledata($id)
    {
        $User = User::find($id);
        if ($User != null) {
            return response()->json([
                'message' => 'data found',
                'data' => $User,
                'status' => true,
            ]);
        } else {
            return response()->json([
                'message' => 'Data no found',
                'data' => [],
                'status' => true
            ]);
        }

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'fix error',
                'errors' => $validator->errors(),
                'status' => false
            ], 200);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = ($request->password);
        $user->save();

        return response()->json([
            'message' => 'user added successfully',
            'data' => $user,
            'status' => true
        ], 200);

    }



    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($user == null) {
            return response()->json([
                'message' => 'User date not found',
                "Data" => [],
                'status' => false,
            ], 200);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Pleace fix the errors',
                'errors' => $validator->errors(),
                'status' => false 
            ]);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return response()->json([
            'message'=> 'User update successfully',
            'data' => $user,
            'status'=> true
        ]);
    }


}
