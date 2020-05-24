<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\ServicoItem;
use Illuminate\Http\Request;

class GetServicoItemController extends Controller
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
        return ServicoItem::where('servico_id', $id)
        ->where('status', 'Ativo')
        ->orderBy('nome', 'asc')
        ->distinct()
        ->get();
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
