<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

class ConfiguracaoController extends Controller
{
    public function index()
    {

        $configuracoes = DB::table('configuracoes')
        ->join('cidades', function ($join) {
            $join->on('configuracoes.cidade_id', '=', 'cidades.id');
        })
        ->select('configuracoes.*', 'cidades.nome as cidade')
        ->get();

        $tipos_config = $this->tipos();

        return view('admin.configuracao', compact('configuracoes', 'tipos_config'));
    }

    public function store(Request $request)
    {
        if ($request) {

            $id_user = auth()->user()->id;

            $request['user_id'] = $id_user;

            Configuracao::create($request->all());

            return redirect('admin/configuracao');
        }
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function tipos()
    {
        $resposta = ['atualizacao_cliente', 'atualizacao_empresa', 'taxa_pedido', 'publicidade', 'anuncio', 'pesquisa'];

        return $resposta;
    }
}
