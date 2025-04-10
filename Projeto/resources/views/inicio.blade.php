<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" type="text/css" href="../estilo.css">-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <title>Clientes</title>

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
                <li><a href="../" style="color: rgb(255, 221, 187);">Cadastrar cliente</a></li>
                <li><a href="/listar-cliente">Ver clientes</a></li>
            </ul>
        </nav>

        <div class="formPai">
            <div class="formFilho">
                <h1>clientes</h1>
                

                <form action="/cadastrar-cliente" method="POST">
                    @csrf 
                    <label for="lblNome">Nome:</label>
                    <input type="text" name="nome">
                    <br><br>
                    <label for="lblValor">Telefone:</label>
                    <input type="text" name="telefone">
                    <br><br>
                    <label for="lblData">Data:</label>
                    <input type="text" name="dataC">
                    <br><br>
                    <label for="lblObs">Observações:</label>
                    <input type="text" name="observ">
                    <br><br>
                    <button class="btn btn-success btn-sm">Cadastrar</button>
                </form>
            </div>
        </div>
        
    </body>
</html>