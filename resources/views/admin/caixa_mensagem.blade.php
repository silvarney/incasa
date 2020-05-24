@extends('admin.page')

@section('title', 'Caixa de Mensagem')

@section('body_page')
    <div class="container">
        
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Caixa de Entrada</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Enviado</a>
        </li>
    </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-responsive-xl table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Título</th>
                            <th scope="col">Data</th>
                            <th scope="col">Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mensagens_in as $mensagem_in)
                        <tr>
                            <th scope="row">
                                <i class="{{ $mensagem_in->msg_icone }}"></i>
                            </th>
                            <td>
                                {{ $mensagem_in->msg_categoria }}
                            </td>
                            <td>
                                {{ $mensagem_in->msg_nome }}
                            </td>
                            <th>
                                {{ $mensagem_in->msg_titulo }}
                            </th>
                            <td>
                                {{ date('H:i:s d/m/Y', strtotime($mensagem_in->created_at)) }}
                            </td>
                            <td>
                                {{ $mensagem_in->msg_status }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    
                                        <form method="post" action="{{ url('admin/ler_msg') }}">
                                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $mensagem_in->msg_id }}">
                                            <button type="submit" class="btn btn-primary" ><i class="fas fa-eye"></i></button>
                                        </form>
                                    
                                        <form method="post" action="{{ url('admin/mensagem_del') }}">
                                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $mensagem_in->msg_id }}">
                                            <button type="submit" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="pagination justify-content-end">
                    {!! $mensagens_in->links('vendor.pagination.bootstrap-4') !!}    
                </div>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table table-responsive-xl table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Título</th>
                            <th scope="col">Data</th>
                            <th scope="col">Status</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($mensagens_out as $mensagem_out)
                        <tr>
                            <th scope="row">
                                <i class="{{ $mensagem_out->msg_icone }}"></i>
                            </th>
                            <td>
                                {{ $mensagem_out->msg_categoria }}
                            </td>
                            <td>
                                {{ $mensagem_out->msg_nome }}
                            </td>
                            <th>
                                {{ $mensagem_out->msg_titulo }}
                            </th>
                            <td>
                                {{ date('H:i:s d/m/Y', strtotime($mensagem_out->created_at)) }}
                            </td>
                            <td>
                                {{ $mensagem_out->msg_status }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    
                                        <form method="post" action="{{ url('empresa/ler_msg_out') }}">
                                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $mensagem_out->msg_id }}">
                                            <button type="submit" class="btn btn-primary" ><i class="fas fa-eye"></i></button>
                                        </form>
                                    
                                        <form method="post" action="{{ url('empresa/mensagem_del') }}">
                                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $mensagem_out->msg_id }}">
                                            <button type="submit" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="pagination justify-content-end">
                    {!! $mensagens_out->links('vendor.pagination.bootstrap-4') !!}    
                </div>
            </div>
        </div>
        
        <div class="box-body">
        
  
        </div> <!-- /div box-body -->

        

    </div> <!-- /div container -->
  
@stop