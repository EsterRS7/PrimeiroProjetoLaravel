<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
</html>

<?php

use Illuminate\Support\Facades\Route;

use App\Models\Cliente;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-cliente', function(Request $request){
    Cliente::create([
        'nome'=>$request->nome,
        'telefone'=>$request->telefone,
        'dataC'=>$request->dataC,
        'observ'=>$request->observ,
    ]);

    echo "
        <center><div class='col-md-4 mb-3' style='margin: 50px; width: 30%'>
            <div class='card' style='background-color: #f1f1f1; color:rgb(27, 27, 27);'>
                <div class='card-body'>
                    <h5 class='card-title'>Tudo certo =)</h5>
                    <p class='card-text'>
                        Cliente cadastrado com sucesso!
                    </p>
                    <a href='../' class='btn btn-primary btn-sm' style='float: center;'>Voltar</a>
                </div>
            </div>
        </div></center>";
});

Route::get('/listar-cliente', function(){
    $cliente = Cliente::all();
    return view('listar', ['cliente' => $cliente]);
});

Route::get('/editar-cliente/{id}', function($id){
    //dd(Prodto::find($id)); //debug and die
    $cliente = Cliente::find($id);
    return view('editar',['cliente' => $cliente]);
});

Route::post('/editar-cliente2/{id}', function(Request $request, $id){
    //dd($request->all());
    $cliente = Cliente::find($id);

    $cliente->update([
        'nome' => $request->nome,
        'telefone'=>$request->telefone,
        'dataC'=>$request->dataC,
        'observ'=>$request->observ,
    ]);

    echo "
        <center><div class='col-md-4 mb-3' style='margin: 50px; width: 30%'>
            <div class='card' style='background-color: #f1f1f1; color:rgb(27, 27, 27);'>
                <div class='card-body'>
                    <h5 class='card-title'>Tudo certo =)</h5>
                    <p class='card-text'>
                        cliente editado com sucesso!
                    </p>
                    <a href='/listar-cliente' class='btn btn-primary btn-sm' style='float: center;'>Voltar</a>
                </div>
            </div>
        </div></center>";
});

Route::get('/excluir-cliente/{id}', function($id){
    //dd($request->all());
    $cliente = Cliente::find($id);
    $cliente->delete();
    echo "
        <center><div class='col-md-4 mb-3' style='margin: 50px; width: 30%'>
            <div class='card' style='background-color: #f1f1f1; color:rgb(27, 27, 27);'>
                <div class='card-body'>
                    <h5 class='card-title'>Tudo certo =)</h5>
                    <p class='card-text'>
                        Cliente excluído com sucesso!
                    </p>
                    <a href='/listar-cliente' class='btn btn-primary btn-sm' style='float: center;'>Voltar</a>
                </div>
            </div>
        </div></center>";
});
