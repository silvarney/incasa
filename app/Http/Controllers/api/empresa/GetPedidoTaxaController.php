<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PedidoTaxa;
use Illuminate\Http\Request;

class GetPedidoTaxaController extends Controller
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
        return PedidoTaxa::where('empresa_id', $id)->first();
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
