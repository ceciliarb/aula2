<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/boaTarde', function (Request $req) {
    return "Boa tarde, $req->nome!";
});

// Route::get('/boaTarde/{nome123}/{idade?}', function ($nome, $idade=null) {
//     if($idade) {
//         return "Boa tarde, $nome! Já tem $idade anos?? Putz!";
//     } 
//     return "Boa tarde, $nome! Idade é apenas um número...";
// });

Route::get('/boaTarde/{nome}/{idade?}', function ($nome, $idade=null) {
    // ['nome'=> $nome, 'idade' => $idade]

    $tabela = [
        // [ 'nome' => 'Cecilia', 'idade' => 34],
        // [ 'nome' => 'Maria Fernanda', 'idade' => 20],
        // [ 'nome' => 'Michelle', 'idade' => 21],
        // [ 'nome' => 'Claudia', 'idade' => null],
        // [ 'nome' => 'Glauber', 'idade' => 32],
        // [ 'nome' => 'Wallace', 'idade' => 43],
        // [ 'nome' => 'Luiz', 'idade' => 35],
        // [ 'nome' => 'Aldo', 'idade' => 42],
    ];

    // $html = '<script>alert()</script>';
    $html = '<p style="color: red"> Ola mundo! </p>';

    return view('boaTarde', compact('nome', 'idade', 'tabela', 'html'));
});


Route::get('/home', function() {
    return view('home2');
});

Route::get('/info', function() {
    return view('info');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
