<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" type="text/css" href="../estilo.css">-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Cliente</title>

        <style> 
            body{
                margin: 0;
                padding: 0;
                background-color:rgb(255, 255, 251);
                font-family:  "Josefin Sans", sans-serif;
            }

            /* ARRUMANDO A NAVBAR */
            nav{
                width: auto;
                height: 50px;
                background-color: #CD853F;
                padding-top: 10px;
                padding-left: 20px;
                
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
                <li class="imgg"><img class="imgFundo" src="../mulher.png"></li>
                <li><a href="../">Cadastrar cliente</a></li>
                <li><a href="/listar-cliente" style="color: rgb(255, 221, 187);">Ver clientes</a></li>
            </ul>
        </nav>
        <div class="formPai">
            <div class="formFilho">
                <h3>Editando informações do cliente</h3><br>
                <form action="/editar-cliente2/{{ $cliente->id }}" method="post">
                    @csrf 
                    <label for="lblNome">Nome:</label>
                    <input type="text" name="nome" value="{{ $cliente->nome ?? ''}}">
                    <br><br>

                    <label for="lblTelefone">Telefone:</label>
                    <input type="text" name="telefone" value="{{ $cliente->telefone ?? ''}}">
                    <br><br>

                    <label for="lblDataCont">Data do contato:</label>
                    <input type="TEXT" name="dataC" value="{{ $cliente->dataC ?? ''}}">
                    <br><br>

                    <label for="lblObs">Observação:</label>
                    <input type="TEXT" name="observ" value="{{ $cliente->observ}}">
                    <br><br>
                    
                    <center><button class="btn btn-success btn-sm">Salvar</center>
                </form>
            </div>
        </div>
        
    </body>
</html>