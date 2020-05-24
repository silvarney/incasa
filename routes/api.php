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

    Route::apiResource('getconfiguracaoempresa', 'api\Empresa\GetConfiguracaoController');

    Route::apiResource('gettelaempresa', 'api\Empresa\GetTelaController');
    Route::apiResource('settelaempresa', 'api\Empresa\SetTelaController');

    Route::apiResource('getfeedsempresa', 'api\Empresa\GetFeedsController');
    
    Route::apiResource('getempresa', 'api\Empresa\GetEmpresaController');
    Route::apiResource('setempresa', 'api\Empresa\SetEmpresaController');

    Route::apiResource('getservico', 'api\Empresa\GetServicoController');
    Route::apiResource('setservico', 'api\Empresa\SetServicoController');

    Route::apiResource('setvinculo', 'api\Empresa\SetVinculoController');

    Route::apiResource('setempresacategoria', 'api\Empresa\SetEmpresaCategoriaController');

    Route::apiResource('setservicocategoria', 'api\Empresa\SetServicoCategoriaController');

    Route::apiResource('getempresasubcategoria', 'api\Empresa\GetEmpresaSubcategoriaController');
    Route::apiResource('setempresasubcategoria', 'api\Empresa\SetEmpresaSubcategoriaController');

    Route::apiResource('setempresaproduto', 'api\Empresa\SetEmpresaProdutoController');

    Route::apiResource('setservicoitem', 'api\Empresa\SetServicoItemController');

    Route::apiResource('setpublicidadepagamento', 'api\Empresa\SetPublicidadePagamentoController');

    Route::apiResource('getpedidoinicio', 'api\Empresa\GetPedidoInicioController');

    Route::apiResource('getpedidoempresa', 'api\Empresa\GetPedidoEmpresaController');

    Route::apiResource('getallpedido', 'api\Empresa\GetAllPedidosController');
    
    Route::apiResource('getpedido', 'api\Empresa\GetPedidoController');

    Route::apiResource('getpedidousuario', 'api\Empresa\GetUsuarioController');

    Route::apiResource('getpedidoendereco', 'api\Empresa\GetUsuarioEnderecoController');

    Route::apiResource('getpedidoproduto', 'api\Empresa\GetPedidoProdutoController');

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