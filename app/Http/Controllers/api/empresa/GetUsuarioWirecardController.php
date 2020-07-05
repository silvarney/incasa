<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetUsuarioWirecardController extends Controller
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
        $produtos = DB::table('usuario_enderecos')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'usuario_enderecos.user_id');
            })
            ->join('cidades', function ($join) {
                $join->on('cidades.id', '=', 'usuario_enderecos.cidade_id');
            })
            ->join('bairros', function ($join) {
                $join->on('bairros.id', '=', 'usuario_enderecos.bairro_id');
            })
            ->select('users.cpf', 'users.nascimento', 'users.fone', 'usuario_enderecos.*', 'cidades.nome as nome_cidade', 'bairros.nome as nome_bairro')
            ->where('users.id', $id)
            ->first();

        return response()->json($produtos);
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
