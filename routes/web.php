<?php

use Illuminate\Support\Facades\Route;




Route::get('/',[\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobreNos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function () {return 'Login';})->name('site.login');



Route::prefix ('/app')->group (function (){   

    Route::get('/clientes', function () {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function () {return 'Produto';})->name('app.produtos');

});

Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste');

Route::fallback(function(){

    echo 'A página acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir à página principal.';


});




