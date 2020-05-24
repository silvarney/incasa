<?php

namespace App\Http\Controllers\api\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetTelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($cidade)
    {
        
        $resposta = DB::select('SELECT * FROM telas
        WHERE cidade_id = '.$cidade.' 
        AND id NOT IN
        (SELECT   tela_id
        FROM  publicidade_pagamentos
        GROUP BY tela_id
        HAVING   COUNT(tela_id) > 2
        ORDER BY COUNT(tela_id) DESC)
        ');

        return response()->json($resposta);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
