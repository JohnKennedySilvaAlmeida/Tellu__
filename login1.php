<?php

include('functions.php');



// if (!isAdmin()) {
// 	$_SESSION['msg'] = "Você deve fazer login primeiro";
// 	header('location: ../login.php');
// }

// if (isset($_GET['logout'])) {
// 	session_destroy();
// 	unset($_SESSION['user']);
// 	header("location: ../login.php");
// }

?>





<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tellu</title>
</head>
<body>
    <style>
        .container{margin-top: 150px}
        button {
            width:48%;
            background-color:p;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
            border: none;
            outline: none;
            padding: 5px;
            border-radius: 5px;
            font-size: 17px;
            color: white;
            background-color: #80179b;
            font-family: 'Cairo', sans-serif;
        }

        .titulo
        {
            font-family: 'Cairo', sans-serif;
            font-size: 35px;
            text-align: center;
            font-weight: 700;
            color: #80179b;
        }
        
        h1{
            text-align: center;
            color: red;  
            font-family: 'Cairo', sans-serif;                    
        }
    /* melhorar a formatação do h1 --- msg de erro qnd o usuario digitar a senha errada */

    </style>
    
    <!-- <nav class="navbar navbar-expand-lg fixed-top text-right azul shadow" id="navbar"> -->

    <a class="navbar-brand" href="index.php">
            <img src="img/tellu_round.png" style="height:40px; vertical-align: middle">  
            <!-- Teste Imagem -->
    </a>
    
    <div class="container text-center">
        <div class="col-lg-3 offset-lg-4">
            
            <form action="login1.php" method="post">  <!--obs !!!!!!! ---> 

                <?php echo display_error(); ?> <!--obs !!!!!!! ---> 

                <div class="form-group">
                    <h1 class="titulo">Entre</h1>

                    <input type="text" class="form-control" id="usuario" name="username"
                    aria-describedby="usuario" placeholder="Seu login"> <!--obs---> 
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="password"
                    aria-describedby="senha" placeholder="Sua senha"> <!--obs---> 

                </div>
                <button type="submit" id="login" name="login_btn"
                    class="col-md-12 my-2" value="Enviar">Login</button>   <!--obs Botão---> 

            </form>

            <a href="create_user1.php"><button class="col-md-12 mb-2">Cadastre-se</button></a>
            <div  id="output"></div>

            <a href="novasenha.php">Esqueceu a senha?</a>


           
            <!-- <input type="button" onclick="funcaoEsqueceuSenha()" value="Exibir Alert" /> -->

        </div>
    </div>



<!-- ============================= -->

    <script>
        document.getElementById('login').addEventListener('click', login)
        function login() {
            var usuario = document.getElementById("usuario").value;
            var senha = document.getElementById("senha").value;

            if (usuario == '') { alert("Usuário não informado"); }
            if (senha == '') { alert("Senha não informada"); stopPropagation(); }

            fetch('users.json')
                .then((res) => res.json())
                .then((dados) => {
                    dados.forEach(function(usuarios){
                        if(usuario == usuarios.usuario && senha == usuarios.senha){
                            alert(usuarios.usuario + " entrou");
                        }
                    });
                })
        }
    </script>


    <script>
        function funcaoEsqueceuSenha()
    {
        alert("! Entraremos em Contato !");
    }
</script>
</body>
</html>