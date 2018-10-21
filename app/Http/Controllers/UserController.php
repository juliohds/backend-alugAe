<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAll()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function showById($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function create(Request $request)
    {
        $user = new User();
        $request->nome;
        $user->fill($request->all());
        $user->save();
        return response()->json($user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $user->fill($this->input());
        $user->update();
        return response()->json($user);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json($user);
    }
}
