<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class SetPedidoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {

        $request['desconto_id'] = 0;
        $request['taxa_id'] = 0;
        $request['entregador_id'] = 0;
        $request['endereco_id'] = 0;
        $request['quantidade'] = 0;
        $request['valor'] = 0.00;
        $request['status'] = 'pendente';

        Pedido::create($request->all());

        return Pedido::where('codigo', $request->codigo)->first();
        
    }

    public function show(Request $request, $id)
    {
        return Pedido::where('empresa_id', $request->id_empresa)->where('user_id', $id)->where('status', 'pendente')->orderBy('id', 'desc')->first();
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
    }
}
