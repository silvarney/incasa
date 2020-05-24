<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servico;

class SetServicoController extends Controller
{
    public function index()
    {
        return Servico::all();
    }

    public function store(Request $request)
    {
        Servico::create($request->all());
    }

    public function show($id)
    {
        return Servico::where('user_id', $id)->first();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $servico = Servico::findOrFail($id);
        $servico->delete();
    }
}
