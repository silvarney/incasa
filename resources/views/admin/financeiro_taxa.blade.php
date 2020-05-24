<?php

function moeda($entrada)
{
    if ($entrada) {
        echo 'R$ ' . number_format($entrada, 2, ',', '.');
    }
}


?>

@extends('admin.page')

@section('title', 'Taxas')



@section('body_page')
<div class="container">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-5.7.2/css/all.css') }}">

    <div class="box-body">
        <table class="table table-responsive-lg table-striped">
            <thead>
                <tr>
                    <th scope="col">Total de Pedidos</th>
                    <th scope="col">Valor da Taxas</th>
                    <th scope="col">Valor em Pedidos</th>
                    <th scope="col">Empresa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($taxas_pedidos as $taxas)
                <tr>
                    <th scope="row">
                        {{ $taxas->total_pedidos }}
                    </th>
                    <td>
                        {{ moeda($taxas->valor_taxa) }}
                    </td>
                    <td>
                        {{ moeda($taxas->valor_pedido) }}
                    </td>
                    <td>
                        {{ $taxas->nome_empresa }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div> <!-- /div box-body -->

    <div class="pagination justify-content-end">
        {!! $taxas_pedidos->links('vendor.pagination.bootstrap-4') !!}
    </div>

</div> <!-- /div container -->

@stop