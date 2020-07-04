<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;

class SetEmpresaController extends Controller
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
        $request['pedido_minimo']=0.00;
        $request['pedido_maximo']=0.00;

        Empresa::create($request->all());

        
    }

    public function show($id)
    {
        return Empresa::where('criador', '=', $id)->first();
    }

    public function update(Request $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
