<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PublicidadePagamento;
use Illuminate\Http\Request;

class SetPublicidadePagamentoAtualizarController extends Controller
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
        //
    }

    public function update(Request $request, $id)
    {
        $pagamento = PublicidadePagamento::where('wirecard_id', $id);
        $pagamento->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
