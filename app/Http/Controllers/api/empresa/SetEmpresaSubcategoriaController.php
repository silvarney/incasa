<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmpresaSubcategoria;

class SetEmpresaSubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $sub_nome = $request->nome;
        
        $sub_inabilitada = EmpresaSubcategoria::where('nome', $sub_nome)->first();
        
        if(isset($sub_inabilitada)){

            $ativar['status'] = 'Ativa';
            $sub_inabilitada->update($ativar);
        
        } elseif (!isset($sub_inabilitada)) {
        
            EmpresaSubcategoria::create($request->all());
        
        }
    }

    public function show($id)
    {
        return EmpresaSubcategoria::where('empresa_id', $id)->where('status', 'Ativa')->get();
    }

    public function update(Request $request, $id)
    {
        $edit_empresasubcategoria = EmpresaSubcategoria::findOrFail($id);
        $edit_empresasubcategoria->update($request->all());
    }

    public function destroy($sub)
    {
        $desabilitar['status'] = 'Inativa';

        EmpresaSubcategoria::where('nome', $sub)->update($desabilitar);
    }
}
