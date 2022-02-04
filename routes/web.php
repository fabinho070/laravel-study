<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobrenos');
Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome}/{sobrenome}/{idade}', function (string $nome, string $sobrenome, string $idade) {
  echo '<h3>Estamos aqui: ' . $nome . '</h3>';
  echo '<h3>Estamos aqui: ' . $sobrenome . '</h3>';
  echo '<h3>Estamos aqui: ' . $idade . '</h3>';
});
