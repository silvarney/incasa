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

@section('title', 'Feed Cliente')

@section('body_page')
<div class="container">
  <!--Fim container-->

  <form id="form" name="form" action="{{ url('admin/create_feed') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
      <div class="col-sm-4">
        <div class="form-group has-success">
          <label for="formTituloInput">Titulo</label>
          <input type="text" class="form-control" id="formTituloInput" name="titulo" maxlength="190">
        </div>
      </div>

      <div class="col-sm-4">
        <div class="form-group has-success">
          <label for="formsubtituloInput">Subtitulo</label>
          <input type="text" class="form-control" id="formsubtituloInput" name="subtitulo" maxlength="190">
        </div>
      </div>

      <div class="col-sm-2">
        <div class="form-group has-success">
          <label for="formTipoInput">Público</label>
          <select class="form-control" id="formTipoInput" name="tipo">
            @foreach ($publicos as $publico)
            <option value="{{ $publico }}"> {{ $publico }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="form-group has-success">
          <label for="formCidadeInput">Cidade</label>
          <select class="form-control" id="formCidadeInput" name="cidade_id">
            @foreach ($cidades as $cidade)
            <option value="{{ $cidade->id }}"> {{ $cidade->nome }}</option>
            @endforeach
          </select>
        </div>
      </div>

    </div>

    <div class="form-group has-success">
      <label for="formDescricaoInput">Descrição</label>
      <textarea class="form-control" id="formDescricaoInput" name="descricao" maxlength="490"> </textarea>
    </div>

    <div class="form-group has-success">
      <label for="formImagemOfertaInput">Imagem</label>
      <input type="file" id="formImagemOfertaInput" class="btn btn-primary size-text-upload" name="imagem" accept="image/*" required>
    </div>


    <button type="submit" class="btn btn-success">Cadastrar</button>

  </form>

  <hr>

  <div class="pagination justify-content-end">
    {!! $feeds->links('vendor.pagination.bootstrap-4') !!}
  </div>

  <table class="table table-responsive-lg table-striped">
    <thead>
      <tr>
        <th scope="col" id="cel-img">Imagem</th>
        <th scope="col">Titulo</th>
        <th scope="col">SubTitulo</th>
        <th scope="col">Público</th>
        <th scope="col">Cidade</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach($feeds as $feed)
      <tr>
        <td>
          <img src="{{ asset($feed->img) }}" id="img-feed" alt="">
        </td>
        <th scope="row">
          {{ $feed->titulo }}
        </th>
        <td>
          {{ $feed->subtitulo }}
        </td>
        <td>
          {{ $feed->tipo }}
        </td>
        <td>
          {{ $feed->cidade }}
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

  <hr>

</div>
<!--Fim container-->

<script type="text/javascript">
  var upload_a = document.getElementById("formImagemOfertaInput");

  upload_a.addEventListener("change", function(e) {
    var size = upload_a.files[0].size;
    if (size > 2097152) { //2MB         
      alert('Tamanho da imagem não é permitido, deve ser até 2mb!'); //Acima do limite
      upload_a.value = ""; //Limpa o campo          
    }
    e.preventDefault();
  });
</script>

@stop