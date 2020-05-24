<?php

namespace App\Http\Controllers\api\publico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class SetUserController extends Controller
{
    public function index()
    {
        //
    }
    
    public function store(Request $request)
    {
        Usuario::create($request->all());  
    }

    public function show($id)
    {
        //return Usuario::findOrFail($id);

        $usuario = DB::table('users')
        ->join('cidades', function ($join) {
            $join->on('users.cidade_id', '=', 'cidades.id');
        })
        ->select('users.*', 'cidades.nome as cidade')
        ->where('users.id', '=', $id)
        ->first();

        return response()->json($usuario);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
