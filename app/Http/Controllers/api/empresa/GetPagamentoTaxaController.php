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
        //
    }

    public function show($id)
    {
        return PagamentoTaxa::where('empresa_id', $id)->orderBy('created_at', 'desc')->get();
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
