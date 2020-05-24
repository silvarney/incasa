<?php
function status($entrada)
{
  if ($entrada == 0) {
    return 'Desativada';
  } elseif ($entrada == 1) {
    return 'Ativada';
  }
}

function moeda($entrada)
{
  if ($entrada) {
    echo 'R$ ' . number_format($entrada, 2, ',', '.');
  }
}


?>

@extends('admin.page')

@section('title', 'Configuração')

@section('body_page')
<div class="container">
  <!--Fim container-->

  <form id="form" name="form" action="{{ url('admin/create_configuracao') }}" method="post">
    {{ csrf_field() }}

    <div class="row">
      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formNomeInput">Nome</label>
          <input type="text" class="form-control" id="formNomeInput" name="nome" maxlength="150">
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formTipoInput">Tipo de Configuracao</label>
          <select class="form-control" id="formTipoInput" name="tipo">
            @foreach ($tipos_config as $tipo)
            <option value="{{ $tipo }}"> {{ $tipo }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formStatusInput">Status</label>
          <select class="form-control" id="formStatusInput" name="status">
            <option value="1"> Ativar</option>
            <option value="0"> Desativar</option>
          </select>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formCidadeInput">Cidade</label>
          <select class="form-control" id="formCidadeInput" name="cidade_id">
            @foreach ($configuracoes ?? '' as $config)
            <option value="{{ $config->cidade_id }}"> {{ $config->cidade }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formTextoInput">Texto</label>
          <input type="text" class="form-control" id="formTextoInput" name="texto" maxlength="500">
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formValorInput">Valor</label>
          <input type="number_format('.')" class="form-control" id="formValorInput" name="valor">
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formQuantidadeInput">Quantidade</label>
          <input type="number" class="form-control" id="formQuantidadeInput" name="quantidade">
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formInicioInput">Início</label>
          <input type="date" class="form-control" id="formInicioInput" name="inicio" maxlength="190">
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formFimInput">Fim</label>
          <input type="date" class="form-control" id="formFimInput" name="fim" maxlength="190">
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group has-success">
          <label for="formDiasInput">Dias</label>
          <input type="number" class="form-control" id="formDiasInput" name="dias">
        </div>
      </div>

    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>

  </form>

  <hr>

  <table class="table table-responsive-lg table-striped">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Tipo</th>
        <th scope="col">Status</th>
        <th scope="col">Cidade</th>
        <th scope="col">Texto</th>
        <th scope="col">Valor</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Inicio</th>
        <th scope="col">Fim</th>
        <th scope="col">Dias</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach($configuracoes ?? '' as $config)
      <tr>
        <th scope="row">
          {{ $config->nome }}
        </th>
        <td>
          {{ $config->tipo }}
        </td>
        <td>
          {{ status($config->status) }}
        </td>
        <td>
          {{ $config->cidade }}
        </td>
        <td>
          {{ $config->texto }}
        </td>
        <td>
          {{ moeda($config->valor) }}
        </td>
        <td>
          {{ $config->quantidade }}
        </td>
        <td>
          {{ date('d/m/Y', strtotime($config->inicio)) }}
        </td>
        <td>
          {{ date('d/m/Y', strtotime($config->fim)) }}
        </td>
        <td>
          {{ $config->dias }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
<!--Fim container-->

@stop