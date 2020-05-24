<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\UsuarioEndereco;
use Illuminate\Http\Request;

class SetUsuarioEnderecoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        UsuarioEndereco::create($request->all());
    }

    public function show($id)
    {
        return UsuarioEndereco::where('user_id', $id)->select('id', 'nome')->get();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
