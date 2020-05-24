<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\Configuracao;
use Illuminate\Http\Request;

class GetConfiguracaoController extends Controller
{
    public function index()
    {
        return Configuracao::where('tipo', 'atualizacao_empresa')->where('status', 1)->first();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        return Configuracao::where('tipo', $request->tipo)->where('cidade_id', $request->cidade_id)->get();
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
