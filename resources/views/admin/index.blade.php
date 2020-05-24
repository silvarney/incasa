@extends('admin.page')

@section('title', 'Area Restrita')

@section('body_page')
<div class="container">
  <!--Fim container-->

  <div class="row" style="width: 100%">

    <div class="col-3 text-center">

      <div class="box-dados">
        <h1>{{ $usuarios }}</h1>
        <h4>Usuários</h4>
      </div>

    </div>
    <br>
    <div class="col-3 text-center">

      <div class="box-dados">
        <h1>{{ $empresas }}</h1>
        <h4>Empresas</h4>
      </div>

    </div>
    <br>
    <div class="col-3 text-center">

      <div class="box-dados">
        <h1>{{ $pedidos }}</h1>
        <h4>Pedidos</h4>
      </div>

    </div>
    <br>
    <div class="col-3 text-center">

      <div class="box-dados">
        <h1>73.083</h1>
        <h4>Mensagens</h4>
      </div>

    </div>
    <br>
  </div>

  <hr>

  <div class="pagination justify-content-end">
    {!! $feeds->links('vendor.pagination.bootstrap-4') !!}
  </div>

  <div class="row">
    @foreach($feeds as $feed)
    <div class="col-sm-2">
      <img src="{{ asset($feed->img) }}" id="img-feed-admin" alt="">
      <br><br>
    </div>
    <div class="col-sm-10">
      <h1>{{ $feed->titulo }}</h1>
      <h3><b>{{ $feed->subtitulo }}</b></h3>
      <h3>{{ $feed->descricao }}</h3>
    </div>
    @endforeach
  </div>

  <hr>

</div>
<!--Fim container-->

@stop