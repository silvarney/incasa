<?php

namespace App\Http\Controllers\api\publico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaSetor;

class GetCategoriaSetorController extends Controller
{
    public function index()
    {
        return CategoriaSetor::where('status', 'Ativa')->get();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($setor)
    {
        return CategoriaSetor::where('status', 'Ativa')->where('setor', $setor)->orderBy('nome', 'asc')->get();
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
