<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\PublicidadeConteudo;
use Illuminate\Http\Request;

class SetPublicidadeConteudoController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        PublicidadeConteudo::create($request->all());
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
