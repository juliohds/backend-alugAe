<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PerfilController extends Controller
{
    public function showAll()
    {
        $perfil = Perfil::all();
        return response()->json($perfil);
    }

    public function showById($id)
    {
        $perfil = Perfil::find($id);
        return response()->json($perfil);
    }

    public function create(Request $request)
    {
        $perfil = new Perfil();
        $request->nome;
        $perfil->fill($request->all());
        $perfil->save();
        return response()->json($perfil);
    }

    public function update(Request $request, $id)
    {
        $perfil = Perfil::find($id);
        $perfil->fill($request->all());
        $perfil->update();
        return response()->json($perfil);
    }

    public function delete($id)
    {
        $perfil = Perfil::find($id);
        $perfil->delete();
        return response()->json($perfil);
    }
}
