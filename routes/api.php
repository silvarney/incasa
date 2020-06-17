<?php

//publico
    Route::apiResource('getusuario', 'api\publico\GetUserController');

    Route::apiResource('setusuario', 'api\publico\SetUserController');

    Route::apiResource('allempresa', 'api\publico\GetEmpresaController');

    Route::apiResource('getcategoriasetor', 'api\publico\GetCategoriaSetorController');

    Route::apiResource('getestado', 'api\publico\GetEstadoController');

    Route::apiResource('getcidade', 'api\publico\GetCidadeController');

    Route::apiResource('getbairro', 'api\publico\GetBairroController');

    Route::apiResource('gettela', 'api\publico\GetTelaController');
//fim - publico

//empresa

    Route::apiResource('getconfiguracaoempresa', 'api\empresa\GetConfiguracaoController');

    Route::apiResource('gettelaempresa', 'api\empresa\GetTelaController');
    Route::apiResource('settelaempresa', 'api\empresa\SetTelaController');

    Route::apiResource('getfeedsempresa', 'api\empresa\GetFeedsController');
    
    Route::apiResource('getempresa', 'api\empresa\GetEmpresaController');
    Route::apiResource('setempresa', 'api\empresa\SetEmpresaController');

    Route::apiResource('getservico', 'api\empresa\GetServicoController');
    Route::apiResource('setservico', 'api\empresa\SetServicoController');

    Route::apiResource('setvinculo', 'api\empresa\SetVinculoController');

    Route::apiResource('setempresacategoria', 'api\empresa\SetEmpresaCategoriaController');

    Route::apiResource('setservicocategoria', 'api\empresa\SetServicoCategoriaController');

    Route::apiResource('getempresasubcategoria', 'api\empresa\GetEmpresaSubcategoriaController');
    Route::apiResource('setempresasubcategoria', 'api\empresa\SetEmpresaSubcategoriaController');

    Route::apiResource('setempresaproduto', 'api\empresa\SetEmpresaProdutoController');

    Route::apiResource('setservicoitem', 'api\empresa\SetServicoItemController');

    Route::apiResource('getpublicidadepagamento', 'api\empresa\GetPublicidadePagamentoController');
    Route::apiResource('setpublicidadepagamento', 'api\empresa\SetPublicidadePagamentoController');
    Route::apiResource('setpublicidadepagamentoatualizar', 'api\empresa\SetPublicidadePagamentoAtualizarController');

    Route::apiResource('setpublicidadeconteudo', 'api\empresa\SetPublicidadeConteudoController');

    Route::apiResource('getpedidoinicio', 'api\empresa\GetPedidoInicioController');

    Route::apiResource('getpedidoempresa', 'api\empresa\GetPedidoEmpresaController');

    Route::apiResource('getallpedido', 'api\empresa\GetAllPedidosController');
    
    Route::apiResource('getpedido', 'api\empresa\GetPedidoController');

    Route::apiResource('getpedidotaxaempresa', 'api\empresa\GetPedidoTaxaController');

    Route::apiResource('getpagamentotaxaempresa', 'api\empresa\GetPagamentoTaxaController');
    Route::apiResource('setpagamentotaxaempresa', 'api\empresa\SetPagamentoTaxaController'); 
    Route::apiResource('setpagamentotaxaatualizarempresa', 'api\empresa\SetPagamentoTaxaAtualizarController'); 

    Route::apiResource('getpedidousuario', 'api\empresa\GetUsuarioController');

    Route::apiResource('getpedidoendereco', 'api\empresa\GetUsuarioEnderecoController');

    Route::apiResource('getpedidoproduto', 'api\empresa\GetPedidoProdutoController');

    Route::apiResource('setempresadestaqueempresa', 'api\empresa\SetEmpresaDestaqueController');

    Route::apiResource('getenderecousuarioempresa', 'api\empresa\GetEnderecoUsuarioController');

//fim - empresa

//cliente
    Route::apiResource('getconfiguracaocliente', 'api\cliente\GetConfiguracaoController');

    Route::apiResource('getfeedscliente', 'api\cliente\GetFeedsController');

    Route::apiResource('getcategoriasetorcliente', 'api\cliente\GetCategoriaSetorController');

    Route::apiResource('getallempresapublico', 'api\cliente\GetAllEmpresaController');
    Route::apiResource('getempresapublico', 'api\cliente\GetEmpresaController');
    Route::apiResource('getempresaunicacliente', 'api\cliente\GetEmpresaController');
    Route::apiResource('getempresacategoriapublico', 'api\cliente\GetEmpresaCategoriaController');
    Route::apiResource('getempresasubcategoriapublico', 'api\cliente\GetEmpresaSubcategoriaController');
    Route::apiResource('getempresaprodutopublico', 'api\cliente\GetEmpresaProdutoController');
    Route::apiResource('getempresadescontocliente', 'api\cliente\GetEmpresaDescontoController');
    Route::apiResource('getempresataxacliente', 'api\cliente\GetEmpresaTaxaController');

    Route::apiResource('getallpedidocliente', 'api\cliente\GetAllPedidoController'); 
    Route::apiResource('getpedidocliente', 'api\cliente\GetPedidoController'); 
    Route::apiResource('setpedidocliente', 'api\cliente\SetPedidoController');

    Route::apiResource('setpedidoprodutocliente', 'api\cliente\SetPedidoProdutoController');

    Route::apiResource('getallservicocliente', 'api\cliente\GetAllServicoController');

    Route::apiResource('getservicocliente', 'api\cliente\GetServicoController');

    Route::apiResource('getservicoitemcliente', 'api\cliente\GetServicoItemController');

    Route::apiResource('getusuarioenderecocliente', 'api\cliente\GetUsuarioEnderecoController');

    Route::apiResource('setusuarioenderecocliente', 'api\cliente\SetUsuarioEnderecoController');

    Route::apiResource('getpublicidadeconteudocliente', 'api\cliente\GetPublicidadeController');

//fim - cliente