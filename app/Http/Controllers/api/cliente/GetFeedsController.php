<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use Illuminate\Http\Request;

class GetFeedsController extends Controller
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
        return Feed::where('cidade_id', $id)
        ->where('tipo', 'cliente')
        ->orderBy('id', 'desc')
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
