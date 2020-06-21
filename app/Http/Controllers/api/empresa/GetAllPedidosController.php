<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetAllPedidosController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $id)
    {


        if ($request->fase === 'aguardando') {
            $fase = 'pedidos.solicitacao';
            $fase_status = 1;
            $no_fase = 'pedidos.aceitacao';
            $no_fase_status = null;
        } elseif ($request->fase ===  'em_aberto') {
            $fase = 'pedidos.aceitacao';
            $fase_status = 1;
            $no_fase = 'pedidos.liberacao';
            $no_fase_status = null;
        } elseif ($request->fase ===  'liberado') {
            $fase = 'pedidos.liberacao';
            $fase_status = 1;
            $no_fase = 'pedidos.entrega';
            $no_fase_status = null;
        }

        $produtos = DB::table('pedidos')
            ->join('users', function ($join) {
                $join->on('pedidos.user_id', '=', 'users.id');
            })
            ->select('pedidos.*', 'users.nome as nome_usuario')
            ->where('pedidos.empresa_id', $id)
            ->where('pedidos.status', $request->status)
            ->where($fase, $fase_status)
            ->where($no_fase, $no_fase_status)
            ->orderBy('pedidos.solicitacao_hora', 'asc')
            ->get();

        return response()->json($produtos);
    }

    public function update(Request $request, $id)
    {
        if (isset($request->acao) && $request->acao === 'aceite') {

            $request['status'] = 'processando';
            $request['aceitacao'] = 1;
            $request['aceitacao_hora'] = date("H:i");
            $request['aceitacao_data'] = date("Y-m-d");

            unset($request['acao']);
        } elseif (isset($request->acao) && $request->acao === 'entrega') {

            $request['status'] = 'finalizado';
            $request['entrega'] = 1;
            $request['entrega_hora'] = date("H:i");

            unset($request['acao']);
        }

        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);

        $request['aceitacao'] = 0;
        $request['aceitacao_hora'] = date("H:i");

        $request['cancelado'] = 1;
        $request['cancelado_hora'] = date("H:i");

        $pedido->update($request);
    }
}
