<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\UsuarioEndereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetEnderecoUsuarioController extends Controller
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
        $resposta = DB::table('usuario_enderecos')
        ->join('bairros', function ($join) {
            $join->on('usuario_enderecos.bairro_id', '=', 'bairros.id');
        })
        ->join('cidades', function ($join) {
            $join->on('usuario_enderecos.cidade_id', '=', 'cidades.id');
        })
        ->select('usuario_enderecos.*', 'bairros.nome as bairro', 'cidades.nome as cidade')
        ->where('usuario_enderecos.id', $id)
        ->get();

        return response()->json($resposta);
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
