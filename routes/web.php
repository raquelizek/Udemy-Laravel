<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');











//ROTA PARA TESTE DE PARAMETROS DE SOMA
//Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

//CASO DE ROTA INEXISTENTE
//Route::fallback( function(){
   // echo 'A rota acessada não existe, <a href="'.route('site.index').'">Clique aqui</a> para acessar a rota inicial.';
//});


// -> DIRECIONAMENTO DE ROTA
//Route::redirect('/rota2', '/rota1');


//Rota para teste para passagem de paramêtro 
//Route::get(
   // '/contato/{nome}/{categoria_id}',
   // function (
   //     string $nome = 'Desconhecido',
   //     int $categoria_id = 1,
   // ) {
  //      echo "Estou aqui: $nome - $categoria_id";
  //  }
//)->where('categoria_id', '[0-9]+')->where('nome', '[A-za-a]+');


//Agrupamento de Rotas -> /app/clientes
//Route::prefix('/app')->group(function(){
   // Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
   // route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'index'])->name('app.fornecedores');
   // Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
//});