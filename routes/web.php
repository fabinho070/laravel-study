<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobrenos');

Route::get('/contato', 'ContatoController@contato');
