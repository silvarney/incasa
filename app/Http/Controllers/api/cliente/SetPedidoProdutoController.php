<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetPedidoProdutoController extends Controller
{
    public function index()
    {
        //
    }

    public function store($request)
    {
        //criar pedido_produto
        PedidoProduto::create($request->all());

        ### alterando a tabela pedido_produto
        //nova instancia
        $pedido = Pedido::findOrFail($request->pedido_id);

        //dados originais do pedido
        $quantidade_pedido = $pedido->quantidade;
        $valor_pedido = $pedido->valor;

        //armazenamento para set nos campos do bd
        $dados_pedido['quantidade'] = $quantidade_pedido + $request->quantidade;
        $dados_pedido['valor'] = $valor_pedido + $request->valor;

        //realizando update na tabela pedidos
        $pedido->update($dados_pedido);

        return $request;
    }

    public function show($id)
    {
        //return PedidoProduto ::where('pedido_id', $id)->get();

        $produtos = DB::table('pedido_produtos')
            ->join('empresa_produtos', function ($join) {
                $join->on('pedido_produtos.produto_id', '=', 'empresa_produtos.id');
            })
            ->select('pedido_produtos.*', 'empresa_produtos.nome as nome_produto', 'empresa_produtos.valor as valor_unitario')
            ->where('pedido_produtos.pedido_id', $id)
            ->orderBy('empresa_produtos.nome', 'asc')
            ->get();

        return response()->json($produtos);
    }

    public function update(Request $request, $id)
    {
        //$produto = PedidoProduto::findOrFail($id);
        //$produto->update($request->all());

        //nova instancia
        $produto = PedidoProduto::findOrFail($id);

        //dados originais
        $id_pedido = $produto->pedido_id;
        $quantidade_original = $produto->quantidade;
        $valor_original = $produto->valor;

        //dados novos
        $nova_quantidade = $request->quantidade;
        $valor_novo = $request->valor;

        //enviando dados para update no pedido
        $this->updatePedido($id_pedido, $quantidade_original, $nova_quantidade, $valor_original, $valor_novo);

        //realizando update na tabela pedido_produtos
        $produto->update($request->all());
    }

    public function destroy($id)
    {
        $produto = PedidoProduto::findOrFail($id);

        ### alterando a tabela pedido_produto
        //nova instancia
        $pedido = Pedido::findOrFail($produto->pedido_id);

        //dados originais do pedido
        $quantidade_pedido = $pedido->quantidade;
        $valor_pedido = $pedido->valor;

        //armazenamento para set nos campos do bd
        $dados_pedido['quantidade'] = $quantidade_pedido - $produto->quantidade;
        $dados_pedido['valor'] = $valor_pedido - $produto->valor;

        //realizando update na tabela pedidos
        $pedido->update($dados_pedido);

        $produto->delete();
    }

    public function updatePedido($id, $quantidade_original, $nova_quantidade, $valor_original, $valor_novo)
    {
        //nova instancia
        $pedido = Pedido::findOrFail($id);

        //dados originais do pedido
        $quantidade_pedido = $pedido->quantidade;
        $valor_pedido = $pedido->valor;

        //removacao dos valores antigos
        $quantidade_pedido = $quantidade_pedido - $quantidade_original;
        $quantidade_pedido = $quantidade_pedido + $nova_quantidade;

        //adicao dos valores novos
        $valor_pedido = $valor_pedido - $valor_original;
        $valor_pedido = $valor_pedido + $valor_novo;

        //armazenamento para set nos campos do bd
        $dados_pedido['quantidade'] = $quantidade_pedido;
        $dados_pedido['valor'] = $valor_pedido;

        //realizando update na tabela pedidos
        $pedido->update($dados_pedido);
    }
}
