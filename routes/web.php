<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobrenos');
Route::get('/contato', 'ContatoController@contato');

Route::get(
  '/contato/{nome}/{categoria_id?}',
  function (
    string $nome,
    int $categoria_id  = 1
  ) {
    echo '<h3>Nome: ' . $nome . '</h3>';
    echo '<h3>Categoria: ' . $categoria_id . '</h3>';
  }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
