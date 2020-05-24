<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\UsuarioEndereco;
use Illuminate\Http\Request;

class GetUsuarioEnderecoController extends Controller
{
    
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return UsuarioEndereco::where('user_id', $id)
        ->where('status', 'Ativo')
        ->orderBy('nome', 'asc')
        ->distinct()
        ->get();
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
