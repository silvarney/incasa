<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use Illuminate\Http\Request;

class GetPedidoController extends Controller
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
        return Pedido::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);

        if (isset($request->acao) == 'liberacao') {
            
            $request['liberacao'] = 1;
            
            unset($request['acao']);

            $pedido->update($request->all());

        } elseif (!isset($request->acao)) {
            
            $pedido->update($request->all());
        }
        
    }

    public function destroy($id)
    {
        //
    }
}
