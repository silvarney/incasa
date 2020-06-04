<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\EmpresaDestaque;
use Illuminate\Http\Request;

class SetEmpresaDestaqueController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        
        EmpresaDestaque::create($request->all());
        
    }

    public function show($id)
    {
        //
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
