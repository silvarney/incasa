<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PublicidadePagamento;
use Illuminate\Http\Request;

class GetPublicidadePagamentoController extends Controller
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
        return PublicidadePagamento::where('empresa_id', $id)->orderBy('created_at', 'desc')->get();
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
