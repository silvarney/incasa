<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Financeiro;
use Illuminate\Http\Request;

class FinanceiroTaxaController extends Controller
{
    public function index()
    {
        $taxas_pedidos = Financeiro::paginate(15);
        return view('admin.financeiro_taxa', compact('taxas_pedidos'));
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
