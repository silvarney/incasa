<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\EmpresaProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetEmpresaProdutoController extends Controller
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
        return EmpresaProduto::where('subcategoria_id', $id)
        ->where('status', 'Ativo')
        ->orderBy('nome', 'asc')
        ->distinct()
        ->get();

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
