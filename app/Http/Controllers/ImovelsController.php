<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;

class ImovelsController extends Controller
{
    public function showAll()
    {
        $imovel = Imovel::all();
        return response()->json($imovel);
    }

    public function showById($id)
    {
        $imovel = Imovel::find($id);
        return response()->json($imovel);
    }

    public function create(Request $request)
    {
        $imovel = new User();
        $request->nome;
        $imovel->fill($request->all());
        $imovel->save();
        return response()->json($imovel);
    }

    public function edit(Request $request, $id)
    {
        $imovel = User::find($id);
        $imovel->fill($request->all());
        $imovel->update();
        return response()->json($imovel);
    }

    public function delete($id)
    {
        $imovel = User::find($id);
        $imovel->delete();
        return response()->json($imovel);
    }
}
