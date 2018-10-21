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
}
