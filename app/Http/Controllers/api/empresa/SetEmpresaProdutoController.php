<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmpresaProduto;

class SetEmpresaProdutoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        EmpresaProduto::create($request->all());
    }
    
    public function show($id)
    {
        return EmpresaProduto::where('empresa_id', $id)
        ->where('status', 'Ativo')
        ->orderBy('nome', 'asc')
        ->get();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $produto = EmpresaProduto::findOrFail($id);
        
        $request['status'] = 'excluido';
        
        $produto->update($request);
    }
}
