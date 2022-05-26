<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();

        return response()->json(['message'=>'Success'], 201);
    } 

    public function show($id)
    {
        $user = User::find($id);
        
        return response()->json($user, 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->estado = $request->estado;
        $user->updated_at = Carbon::now();
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