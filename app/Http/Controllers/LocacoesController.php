<?php

namespace App\Http\Controllers;

use App\Locacoes;
use Illuminate\Http\Request;

class LocacoesController extends Controller
{
    public function showAll()
    {
        $locacoes = Locacoes::all();
        return response()->json($locacoes);
    }

    public function showById($id)
    {
        $locacoes = Locacoes::find($id);
        return response()->json($locacoes);
    }

    public function create(Request $request)
    {
        $locacoes = new Locacoes();
        $request->nome;
        $locacoes->fill($request->all());
        $locacoes->save();
        return response()->json($locacoes);
    }

    public function update(Request $request, $id)
    {
        $locacoes = Locacoes::find($id);
        $locacoes->fill($request->all());
        $locacoes->update();
        return response()->json($locacoes);
    }

    public function delete($id)
    {
        $locacoes = Locacoes::find($id);
        $locacoes->delete();
        return response()->json($locacoes);
    }
}
