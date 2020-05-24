<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.lista_usuario', compact('usuarios'));
    }

    public function desativar(Request $request)
    {
        $usuario = Usuario::where('id', '=', $request->id)->update(['status' => 'desativado']);
        return redirect('admin/lista_usuario');
    }

    public function ativar(Request $request)
    {
        $usuario = Usuario::where('id', '=', $request->id)->update(['status' => 'ativo']);
        return redirect('admin/lista_usuario');
    }

    //funcoes complementares

    
}
