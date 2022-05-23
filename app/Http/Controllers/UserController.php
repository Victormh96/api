<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with(['role'])
        ->get(); 

        return response()->json($user, 200);
    }

    public function store(Request $request) 
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->estado = $request->estado;
        $user->save();

        return response()->json(['message'=>'Success'], 201);
    } 

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return response()->json(['message'=>'Success'], 202);
    }
}