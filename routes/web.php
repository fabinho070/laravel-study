<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () { return 'Login'; })->name('app.login');

Route::prefix('/app')->group(function () {
  Route::get('/clientes', function () { return 'Clientes'; })->name('app.clientes');
  Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
  Route::get('/produtos', function () { return 'Produtos'; })->name('app.produtos');
});

Route::fallback(function () { echo
    'Erro ao localizar a página, clique <a href="' . route('site.index') . '">aqui</a> para ir a página inicial';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');