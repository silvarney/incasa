<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetAllPedidoController extends Controller
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
        $pedido = DB::table('pedidos')
        ->join('empresas', function ($join) {
            $join->on('pedidos.empresa_id', '=', 'empresas.id');
        })
        ->select('pedidos.*', 'empresas.nome as empresa',  'empresas.img_perfil as perfil')
        ->where('pedidos.user_id', $id)
        ->where('pedidos.status', $request->status)
        ->get();

        return response()->json($pedido);
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
