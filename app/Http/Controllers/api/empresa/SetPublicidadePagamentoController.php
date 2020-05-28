<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PublicidadePagamento;
use Illuminate\Http\Request;
use Artistas\PagSeguro\PagSeguro;

class SetPublicidadePagamentoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        
        $request['status'] = 'aguardando pagamento';

        PublicidadePagamento::create($request->all());

        $publicidade = PublicidadePagamento::where('codigo', $request->codigo)->first();

        return $publicidade->id;

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $pagamento = PublicidadePagamento::findOrFail($id);
        $pagamento->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
