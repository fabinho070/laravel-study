<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function () {
  return 'Login';
})->name('app.login');


//rotas privdadas
Route::prefix('/app')->group(function () {
  Route::get('/clientes', function () {
    return 'Clientes';
  })->name('app.clientes');
  Route::get('/fornecedores', function () {
    return 'Fornecedores';
  })->name('app.fornecedores');
  Route::get('/produtos', function () {
    return 'Produtos';
  })->name('app.produtos');
});

Route::fallback(function () {
  echo 'Erro ao localizar a página, clique <a href="' . route('site.index') .
    '">aqui</a> para ir a página inicial';
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

// Route::get(
//   '/contato/{nome}/{categoria_id?}',
//   function (
//     string $nome,
//     int $categoria_id  = 1
//   ) {
//     echo '<h3>Nome: ' . $nome . '</h3>';
//     echo '<h3>Categoria: ' . $categoria_id . '</h3>';
//   }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
