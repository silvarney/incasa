<?php

//publico
    Route::apiResource('getusuario', 'api\publico\GetUserController');

    Route::apiResource('setusuario', 'api\publico\SetUserController');

    Route::apiResource('allempresa', 'api\publico\GetEmpresaController');

    Route::apiResource('getcategoriasetor', 'api\publico\GetCategoriaSetorController');

    Route::apiResource('getestado', 'api\publico\GetEstadoController');

    Route::apiResource('getcidade', 'api\publico\GetCidadeController');

    Route::apiResource('getbairro', 'api\publico\GetBairroController');
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

    Route::apiResource('setpublicidadepagamento', 'api\empresa\SetPublicidadePagamentoController');

    Route::apiResource('getpedidoinicio', 'api\empresa\GetPedidoInicioController');

    Route::apiResource('getpedidoempresa', 'api\empresa\GetPedidoEmpresaController');

    Route::apiResource('getallpedido', 'api\empresa\GetAllPedidosController');
    
    Route::apiResource('getpedido', 'api\empresa\GetPedidoController');

    Route::apiResource('getpedidotaxaempresa', 'api\empresa\GetPedidoTaxaController');

    Route::apiResource('getpagamentotaxaempresa', 'api\empresa\GetPagamentoTaxaController');

    Route::apiResource('getpedidousuario', 'api\empresa\GetUsuarioController');

    Route::apiResource('getpedidoendereco', 'api\empresa\GetUsuarioEnderecoController');

    Route::apiResource('getpedidoproduto', 'api\empresa\GetPedidoProdutoController');

//fim - empresa

//cliente
    Route::apiResource('getconfiguracaocliente', 'api\cliente\GetConfiguracaoController');

    Route::apiResource('getfeedscliente', 'api\cliente\GetFeedsController');

    Route::apiResource('getcategoriasetorcliente', 'api\cliente\GetCategoriaSetorController');

    Route::apiResource('getallempresapublico', 'api\Cliente\GetAllEmpresaController');
    Route::apiResource('getempresapublico', 'api\Cliente\GetEmpresaController');
    Route::apiResource('getempresaunicacliente', 'api\Cliente\GetEmpresaController');
    Route::apiResource('getempresacategoriapublico', 'api\Cliente\GetEmpresaCategoriaController');
    Route::apiResource('getempresasubcategoriapublico', 'api\Cliente\GetEmpresaSubcategoriaController');
    Route::apiResource('getempresaprodutopublico', 'api\Cliente\GetEmpresaProdutoController');
    Route::apiResource('getempresadescontocliente', 'api\Cliente\GetEmpresaDescontoController');
    Route::apiResource('getempresataxacliente', 'api\Cliente\GetEmpresaTaxaController');

    Route::apiResource('getallpedidocliente', 'api\Cliente\GetAllPedidoController'); 
    Route::apiResource('getpedidocliente', 'api\Cliente\GetPedidoController'); 
    Route::apiResource('setpedidocliente', 'api\Cliente\SetPedidoController');

    Route::apiResource('setpedidoprodutocliente', 'api\Cliente\SetPedidoProdutoController');

    Route::apiResource('getallservicocliente', 'api\Cliente\GetAllServicoController');

    Route::apiResource('getservicocliente', 'api\Cliente\GetServicoController');

    Route::apiResource('getservicoitemcliente', 'api\Cliente\GetServicoItemController');

    Route::apiResource('getusuarioenderecocliente', 'api\Cliente\GetUsuarioEnderecoController');

    Route::apiResource('setusuarioenderecocliente', 'api\Cliente\SetUsuarioEnderecoController');

    Route::apiResource('getpublicidadeconteudocliente', 'api\Cliente\GetPublicidadeController');

//fim - cliente