<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetHistoricoPedidoController extends Controller
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
        $empresa = DB::table('pedidos')
        ->join('users', function ($join) {
            $join->on('pedidos.user_id', '=', 'users.id');
        })
        ->select('pedidos.*', 'users.nome as nome_cliente')
        ->where('pedidos.empresa_id', '=', $id)
        ->whereMonth('pedidos.created_at', $request->mes)
        ->get();

        return response()->json($empresa);
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
