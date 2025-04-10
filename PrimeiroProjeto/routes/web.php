<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
</html>

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

Route::post('/cadastrar-produto', function(Request $request){
    //dd($request->all());

    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "
        <center><div class='col-md-4 mb-3' style='margin: 50px; width: 30%'>
            <div class='card' style='background-color: #f1f1f1; color:rgb(27, 27, 27);'>
                <div class='card-body'>
                    <h5 class='card-title'>Tudo certo =)</h5>
                    <p class='card-text'>
                        Produto cadastrado com sucesso!
                    </p>
                    <a href='../' class='btn btn-primary btn-sm' style='float: center;'>Voltar</a>
                </div>
            </div>
        </div></center>";
});

//listar
Route::get('/listar-produto', function(){
    //dd(Prodto::find($id)); //debug and die
    $produto = Produto::all();
    return view('listar',['produto' => $produto]);
});

//editar
Route::get('/editar-produto/{id}', function($id){
    //dd(Prodto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('editar',['produto' => $produto]);
});

Route::post('/editar-produto2/{id}', function(Request $request, $id){
    //dd($request->all());
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "
        <center><div class='col-md-4 mb-3' style='margin: 50px; width: 30%'>
            <div class='card' style='background-color: #f1f1f1; color:rgb(27, 27, 27);'>
                <div class='card-body'>
                    <h5 class='card-title'>Tudo certo =)</h5>
                    <p class='card-text'>
                        Produto editado com sucesso!
                    </p>
                    <a href='/listar-produto' class='btn btn-primary btn-sm' style='float: center;'>Voltar</a>
                </div>
            </div>
        </div></center>";
});

//excluir
Route::get('/excluir-produto/{id}', function($id){
    //dd($request->all());
    $produto = Produto::find($id);
    $produto->delete();
    echo "
        <center><div class='col-md-4 mb-3' style='margin: 50px; width: 30%'>
            <div class='card' style='background-color: #f1f1f1; color:rgb(27, 27, 27);'>
                <div class='card-body'>
                    <h5 class='card-title'>Tudo certo =)</h5>
                    <p class='card-text'>
                        Produto excluído com sucesso!
                    </p>
                    <a href='/listar-produto' class='btn btn-primary btn-sm' style='float: center;'>Voltar</a>
                </div>
            </div>
        </div></center>";
});