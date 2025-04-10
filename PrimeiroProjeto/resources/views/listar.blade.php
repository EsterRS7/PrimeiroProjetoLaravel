<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style> 
            body{
                margin: 0;
                padding: 0;
                background-color:rgb(232, 232, 232);
                font-family:  "Josefin Sans", sans-serif;
            }

            /* ARRUMANDO A NAVBAR */
            nav{
                width: auto;
                height: 50px;
                background-color: #CD853F;
                padding-bottom: 15px;
                padding-left: 20px;
                padding-top: 10px;
            }  
            .menu{
                list-style: none;
                float: left;
                padding: 0;
                top: 0;
                
            }
            .menu li{
                position: relative;
                float: left;
                border-right: 1px solid rgb(154, 93, 32);
                padding: 0 10px;
                height: 30px;
            }
            .menu li a{
                text-decoration: none;
                color: black;
                padding: 5px 10px;
                display: block;
            }
            .menu li a:hover{
                color: rgb(255, 221, 187);
            }
            .menu li .imgFundo{
                width: 30px;
                color: black;
                border: #CD853F;
            }

            .menu .imgg{
                border: none;
            }
            
            /* ARRUMANDO O CONTEÚDO DA PÁG */
            

            .formPai{
                width: 40%;
                height: auto;
                margin: 50px auto;
                background-color: #fff;
                border-radius: 10px;
                border: 5px black;
                box-shadow: 0px 0px 10px rgb(48, 48, 48);
            }

            .formFilho{
                padding: 50px;
                justify-items: center;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul class="menu">
                <li class="imgg"><img class="imgFundo" src="../cesta.png"></li>
                <li><a href="../">Cadastrar produto</a></li>
                <li><a href="/listar-produto" style="color: rgb(255, 221, 187);">Ver produtos</a></li>
            </ul>
        </nav>
        <div class="formPai"></div>
        @foreach ($produto as $produto)
                    <div class="col-md-4 mb-3" style="justify-self: center; width: 30%">
                        <div class="card" style="background-color:rgb(242, 242, 242); color:rgb(27, 27, 27);">
                            <div class="card-body">
                                <h5 class="card-title">{{ $produto->nome ?? 'Nome não informado' }}</h5>
                                <p class="card-text">
                                    <strong>Telefone:</strong> {{ $produto->valor ?? 'Não informado' }}<br>
                                    <strong>Data do Contato:</strong> {{ $produto->estoque ?? 'Não informado' }}<br>
                                </p>
                                <a href="{{ url('/editar-produto/' . $produto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <a href="{{ url('/excluir-produto/' . $produto->id) }}" class="btn btn-danger btn-sm">Excluir</a>
                                <a href="{{ url('../')}}" class="btn btn-success btn-sm" style="float: right;">Voltar</a>
                            </div>
                        </div>
                    </div>
                    @if(session('success'))
                        <script>
                            alert("{{ session('success') }}");
                        </script>
                    @endif
                @endforeach

                
    </body>
    
</html>