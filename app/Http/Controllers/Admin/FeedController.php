<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    public function index()
    {
        
        $cidades = Cidade::all();

        $feeds = DB::table('feed')
        ->join('cidades', function ($join) {
            $join->on('feed.cidade_id', '=', 'cidades.id');
        })
        ->select('feed.*', 'cidades.nome as cidade')
        ->orderBy('id', 'desc')
        ->paginate(15);
        
        $publicos = $this->publicos();

        return view('admin.feed', compact('publicos', 'feeds', 'cidades'));

    }

    public function store(Request $request)
    {
        if ($request) {

            $id_user = auth()->user()->id;

            $request['user_id'] = $id_user;

            $request['status'] = 'publicado';

            $request['img'] = $this->uploadImagem($request->file('imagem'), 'img-feed', '');

            Feed::create($request->all());

            return redirect('admin/feed');
        }
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

    public function publicos()
    {
        $resposta = ['Cliente', 'Empresa'];

        return $resposta;
    }
}
