<?php

//funcoes complementares

function tipo($entrada)
{
    if ($entrada == 0) {
        return 'Admin';
    } elseif ($entrada == 1) {
        return 'Gerente';
    } elseif ($entrada == 2) {
        return 'Empresa';
    } elseif ($entrada == 3) {
        return 'Padrão';
    }
}

function nivel($entrada)
{
    if ($entrada == 0) {
        return 'Super';
    } elseif ($entrada == 1) {
        return 'Padrão';
    } elseif ($entrada == 2) {
        return 'Básico';
    } elseif ($entrada == 3) {
        return 'Convidade';
    }
}

?>

@extends('admin.page')

@section('title', 'Usuários')



@section('body_page')
<div class="container">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-5.7.2/css/all.css') }}">

    <div class="box-body">
        <table class="table table-responsive-lg table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <th scope="row">
                        {{ $usuario->nome }}
                    </th>
                    <td>
                        {{ date('d/m/Y', strtotime($usuario->created_at)) }}
                    </td>
                    <td>
                        {{ tipo($usuario->tipo) }}
                    </td>
                    <td>
                        {{ nivel($usuario->nivel) }}
                    </td>
                    <td>
                        {{ $usuario->status }}
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <form method="post" action="{{ url('admin/ativar_user') }}">
                                {{ csrf_field() }}<input type="hidden" name="id" value="{{ $usuario->id }}">
                                <button type="submit" class="btn btn-success"><i class="fas fa-user-check"></i></button>
                            </form>
                            <form method="post" action="{{ url('admin/desativar_user') }}">
                                {{ csrf_field() }}<input type="hidden" name="id" value="{{ $usuario->id }}">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-user-alt-slash"></i></button>
                            </form>
                            <form method="post" action="{{ url('admin/enviar_mensagem') }}">
                                {{ csrf_field() }}<input type="hidden" name="id" value="{{ $usuario->id }}">
                                <button type="submit" class="btn btn-info"><i class="fas fa-envelope"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div> <!-- /div box-body -->

    <div class="pagination justify-content-end">
        {!! $usuarios->links('vendor.pagination.bootstrap-4') !!}
    </div>

</div> <!-- /div container -->

@stop