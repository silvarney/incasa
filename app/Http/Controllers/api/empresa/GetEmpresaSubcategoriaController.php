<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmpresaSubcategoria;

class GetEmpresaSubcategoriaController extends Controller
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
        return EmpresaSubcategoria::where('categoria_id', $id)->where('status', 'Ativa')->get();
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
