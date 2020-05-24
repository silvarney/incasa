<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImagem($imagem, $pasta, $tipo)
    {
        ## manipulação da imagem e validação
        if ($imagem)
        {
            $extensao = $imagem->getClientOriginalExtension();
            
            if ($extensao != 'jpg' && $extensao != 'png')
            {
                return back()->with('erro', 'Erro: Este arquivo não é imagem');
            }
        }

        ## manipulação da imagem e validação
        $arquivo = "img_".date("YmdHis").$tipo.'.'.$extensao;
        $pasta_local = "img/".$pasta."/user_".auth()->user()->id;
        $diretorio = $pasta_local.'/'.$arquivo;

        ## criação da pasta destino da imagem
        if(!file_exists($pasta_local )){
            mkdir($pasta_local, 0755, true); 
        }

        ## movendo a imagem para o diretório local e salvando o endereço no bd
        File::move($imagem, $diretorio);
        if(substr(sprintf('%o', fileperms($diretorio)), -4)!== 0755){
            chmod ($diretorio, 0755);
        }

        return $diretorio;
    }

    public function sair() 
    {
        
        //logout user
        auth()->logout();
        
        // redirect to homepage
        return redirect('/');

    }
}
