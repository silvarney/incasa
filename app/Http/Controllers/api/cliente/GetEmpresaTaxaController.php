<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\EmpresaTaxa;
use Illuminate\Http\Request;

class GetEmpresaTaxaController extends Controller
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
        return EmpresaTaxa::where('empresa_id', $id)
            ->where('status', 'ativo')
            ->orderBy('id', 'desc')
            ->first();
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
