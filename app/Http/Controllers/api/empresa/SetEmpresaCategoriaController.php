<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmpresaCategoria;

class SetEmpresaCategoriaController extends Controller
{

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $categoria_nome = $request->nome;
        $empresa_id = $request->empresa_id;
        
        $categoria_inabilitada = EmpresaCategoria::where('nome', $categoria_nome)->where('empresa_id', $empresa_id)->first();
        
        if(isset($categoria_inabilitada)){

            $ativar['status'] = 'Ativa';
            $categoria_inabilitada->update($ativar);
        
        } elseif (!isset($categoria_inabilitada)) {
        
            EmpresaCategoria::create($request->all());
        
        }
        
    }

    public function show($id)
    {
        return EmpresaCategoria::where('empresa_id', $id)->where('status', 'Ativa')->get();
    }

    public function update(Request $request, $id)
    {
        $edit_categoriamercado = EmpresaCategoria::findOrFail($id);
        $edit_categoriamercado->update($request->all());
    }

    public function destroy($categoria)
    {
        $desabilitar['status'] = 'Inativa';

        EmpresaCategoria::where('nome', $categoria)->update($desabilitar);
    }
}
