<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PedidoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetPedidoProdutoController extends Controller
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
        $produtos = DB::table('pedido_produtos')
        ->join('empresa_produtos', function ($join) {
            $join->on('pedido_produtos.produto_id', '=', 'empresa_produtos.id');
        })
        ->select('pedido_produtos.*', 'empresa_produtos.nome as nome_produto', 'empresa_produtos.imagem as imagem')
        ->where('pedido_produtos.pedido_id', $id)
        ->orderBy('empresa_produtos.nome', 'asc')
        ->get();

        return response()->json($produtos);
    }

    public function update(Request $request, $id)
    {
        $pedido_produto = PedidoProduto::findOrFail($id);
        $pedido_produto->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
