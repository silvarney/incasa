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
        ->orderBy('nome', 'asc')
        ->get();
    }

    public function update(Request $request, $id)
    {
        if (isset($request->acao) && $request->acao === 'ativo') {

            $request['status'] = 'Ativo';
            
            unset($request['acao']);
        } elseif (isset($request->acao) && $request->acao === 'indisponivel') {

            $request['status'] = 'indisponivel';

            unset($request['acao']);
        } elseif (isset($request->acao) && $request->acao === 'excluido') {

            $request['status'] = 'excluido';

            unset($request['acao']);
        }

        $produto = EmpresaProduto::findOrFail($id);
        $produto->update($request->all());
    }

    public function destroy($id)
    {
       //
    }
}
