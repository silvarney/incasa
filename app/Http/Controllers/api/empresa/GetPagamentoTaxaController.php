<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PagamentoTaxa;
use Illuminate\Http\Request;

class GetPagamentoTaxaController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        PagamentoTaxa::create($request->all());

        $pagamento = PagamentoTaxa::where('codigo', $request->codigo)->first();

        return $pagamento->id;
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $pagamento = PagamentoTaxa::findOrFail($id);
        $pagamento->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
