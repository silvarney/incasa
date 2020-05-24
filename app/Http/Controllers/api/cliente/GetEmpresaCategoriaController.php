<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\EmpresaCategoria;
use Illuminate\Http\Request;

class GetEmpresaCategoriaController extends Controller
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
        return EmpresaCategoria::where('empresa_id', $id)->where('status', 'Ativa')->orderBy('nome', 'asc')->get();
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
