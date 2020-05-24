<?php

function moeda($entrada)
{
    if ($entrada) {
        echo 'R$ ' . number_format($entrada, 2, ',', '.');
    }
}


?>

@extends('admin.page')

@section('title', 'Publicidade')



@section('body_page')
<div class="container">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-5.7.2/css/all.css') }}">

    <div class="box-body">
        <table class="table table-responsive-lg table-striped">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Status</th>
                    <th scope="col">Início</th>
                    <th scope="col">Fim</th>
                    <th scope="col">Dias</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Cidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($publicidade_pagamentos as $pagamentos)
                <tr>
                    <th scope="row">
                        {{ $pagamentos->codigo }}
                    </th>
                    <td>
                        {{ $pagamentos->tipo }}
                    </td>
                    <td>
                        {{ moeda($pagamentos->valor) }}
                    </td>
                    <td>
                        {{ $pagamentos->status }}
                    </td>
                    <td>
                        {{ $pagamentos->inicio }}
                    </td>
                    <td>
                        {{ $pagamentos->fim }}
                    </td>
                    <td>
                        {{ $pagamentos->dias }}
                    </td>
                    <td>
                        {{ $pagamentos->empresa }}
                    </td>
                    <td>
                        {{ $pagamentos->cidade }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div> <!-- /div box-body -->

    <div class="pagination justify-content-end">
        {!! $publicidade_pagamentos->links('vendor.pagination.bootstrap-4') !!}
    </div>

</div> <!-- /div container -->

@stop