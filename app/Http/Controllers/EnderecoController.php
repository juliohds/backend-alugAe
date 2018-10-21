<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Endereco;

class EnderecoController extends Controller
{
    public function showAll()
    {
        $endereco = Endereco::all();
        return response()->json($endereco);
    }

    public function showById($id)
    {
        $endereco = Endereco::find($id);
        return response()->json($endereco);
    }

    public function create(Request $request)
    {
        $endereco = new Endereco();
        $endereco->fill($request->all());
        $endereco->save();
        return response()->json($endereco);
    }

    public function update(Request $request, $id)
    {
        $endereco = Endereco::find($id);
        $endereco->fill($request->all());
        $endereco->update();
        return response()->json($endereco);
    }

    public function delete($id)
    {
        $endereco = Endereco::find($id);
        $endereco->delete();
        return response()->json($endereco);
    }

}
