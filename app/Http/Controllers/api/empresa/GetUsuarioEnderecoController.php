<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\UsuarioEndereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $resposta = DB::table('usuario_enderecos')
        ->join('bairros', function ($join) {
            $join->on('usuario_enderecos.bairro_id', '=', 'bairros.id');
        })

        ->select('usuario_enderecos.*', 'bairros.nome as bairro')
        ->where('usuario_enderecos.id', '=', $id)
        ->first();

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
