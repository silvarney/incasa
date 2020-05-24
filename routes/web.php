<?php

#grupo admin
Route::group(['middleware'=>['auth'], 'namespace'=>'Admin', 'prefix'=>'admin'], function(){

    ## get
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/lista_usuario', 'UsuarioController@index')->name('admin.usuarios');
    Route::get('/configuracao', 'ConfiguracaoController@index')->name('admin.configuracao');
    Route::get('/feed', 'FeedController@index')->name('admin.feed');
    Route::get('/financeiro_taxa', 'FinanceiroTaxaController@index')->name('admin.financeiro_taxa');
    Route::get('/financeiro_publicidade', 'FinanceiroPublicidadeController@index')->name('admin.financeiro_publicidade');

    ## create
    Route::post('create_configuracao', 'ConfiguracaoController@store');
    Route::post('create_feed', 'FeedController@store');

});

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# sair
Route::get('/sair', 'Controller@sair');