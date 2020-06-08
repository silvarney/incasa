<?php

namespace App\Http\Controllers\api\publico;

use App\Http\Controllers\Controller;
use App\Models\Tela;
use Illuminate\Http\Request;

class GetTelaController extends Controller
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
        return Tela::findOrFail($id);
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
