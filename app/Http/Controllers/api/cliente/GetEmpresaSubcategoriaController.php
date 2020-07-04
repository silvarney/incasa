<?php

namespace App\Http\Controllers\api\cliente;

use App\Http\Controllers\Controller;
use App\Models\EmpresaSubcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetEmpresaSubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return EmpresaSubcategoria::where('categoria_id', $id)->where('status', 'Ativa')->orderBy('nome', 'asc')->get();

        //get empresa subcategoria

        $resposta = DB::table('empresa_subcategorias')
            ->join('empresa_produtos', function ($join) {
                $join->on('empresa_subcategorias.id', '=', 'empresa_produtos.subcategoria_id')
                    ->where('empresa_produtos.status', 'Ativo');
            })
            ->select('empresa_subcategorias.*')
            ->where('empresa_subcategorias.empresa_id', $id)
            ->where('empresa_subcategorias.status', 'Ativa')
            ->orderBy('empresa_subcategorias.nome', 'asc')
            ->distinct()
            ->get();

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
