<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use App\Models\ServicoItem;
use Illuminate\Http\Request;

class SetServicoItemController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        ServicoItem::create($request->all());
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
