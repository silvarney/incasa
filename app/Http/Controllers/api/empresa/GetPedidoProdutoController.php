<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
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
        //atualizar produto
        $dados_produto['status'] = $request->status;
        
        $pedido_produto = PedidoProduto::findOrFail($id);
        $pedido_produto->update($dados_produto);

        //atualizar pedido
        $pedido_valor = Pedido::findOrFail($request->pedido_id);
        
        $dados_pedido['valor_total'] = $request->valor_total;
        $dados_pedido['quantidade'] = $request->quantidade;

        $pedido_valor->update($dados_pedido);

        return Pedido::findOrFail($request->pedido_id);
    }

    public function destroy($id)
    {
        //
    }
}
