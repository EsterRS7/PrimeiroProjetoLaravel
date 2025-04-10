<?php

use Illuminate\Support\Facades\Route;

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

use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-produto', function(Request$request){
    //dd($request->all());

    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "Produto criado com sucesso!";
});

//listar
Route::get('/listar-produto/(id)', function($id){
    //dd(Prodto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('listar',['produto' => $produto]);
});

//editar
Route::get('/editar-produto/(id)', function($id){
    //dd(Prodto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('editar',['produto' => $produto]);
});

Route::get('/editar-produto/(id)', function(Request $request, $id){
    //dd($request->all());
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "Produto editado com sucesso!";
});

//excluir
Route::get('/excluir-produto/{id}', function($id){
    //dd($request->all());
    $produto = Produto::find($id);
    $produto->delete();
    echo "Produto excluído com sucesso!";
});