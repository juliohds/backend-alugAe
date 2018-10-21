<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
    public function showAll()
    {
        $chat = Chat::all();
        return response()->json($chat);
    }

    public function showById($id)
    {
        $chat = Chat::find($id);
        return response()->json($chat);
    }

    public function create(Request $request)
    {
        $chat = new Chat();
        $request->nome;
        $chat->fill($request->all());
        $chat->save();
        return response()->json($chat);
    }

    public function update(Request $request, $id)
    {
        $chat = Chat::find($id);
        $chat->fill($request->all());
        $chat->update();
        return response()->json($chat);
    }

    public function delete($id)
    {
        $chat = Chat::find($id);
        $chat->delete();
        return response()->json($chat);
    }
}
