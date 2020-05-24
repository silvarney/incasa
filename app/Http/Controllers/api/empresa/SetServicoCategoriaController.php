<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\ServicoCategoria;
use Illuminate\Http\Request;

class SetServicoCategoriaController extends Controller
{
    
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $categoria_nome = $request->nome;
        
        $categoria_inabilitada = ServicoCategoria::where('nome', $categoria_nome)->first();
        
        if(isset($categoria_inabilitada)){

            $ativar['status'] = 'Ativa';
            $categoria_inabilitada->update($ativar);
        
        } elseif (!isset($categoria_inabilitada)) {
        
            ServicoCategoria::create($request->all());
        
        }
    }

    public function show($id)
    {
        return ServicoCategoria::where('servico_id', $id)->where('status', 'Ativa')->get();
    }

    public function update(Request $request, $id)
    {
        $edit_categoriamercado = ServicoCategoria::findOrFail($id);
        $edit_categoriamercado->update($request->all());
    }

    public function destroy($categoria)
    {
        $desabilitar['status'] = 'Inativa';

        ServicoCategoria::where('nome', $categoria)->update($desabilitar);
    }
}
