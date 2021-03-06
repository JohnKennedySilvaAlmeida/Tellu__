<?php
//incluir o cabecalho

include("funcoeLogin.php");

// include("p_cabecalho.php");


//Verificar se o cookie foi setado
if (isset($_COOKIE["usuario"])) {
    $_SESSION["usuario"] = $_COOKIE["usuario"];
    $_SESSION["nome"]    = $_COOKIE["nome"];
}

//Se o usuario estiver logado, vai para a home
if (isset($_SESSION["usuario"])) {
    header("Location: index.php");   // obs --------------------------------------------------!!!!
}


//Limpeza dos caracteres especiais;
$usuario = filter_input(INPUT_POST, "usuario",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, "senha",FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (($usuario)&&($senha)){
    //Base de usuario (depois vem o banco de dados);
    $db = [
        [
            "nome" => "Mario da silva",
            "usuario" => "mario",
            //senha 1234
            "senha" => '$2y$10$8qtCnWnGtwk6nTnF6cxLZuSQdFRKlxCeKYRcSn80C6virMJX8Za.6', 
        ],
        [
            "nome" => "Pedro Paulo",
            "usuario" => "pedro",
            //senha 123456
            "senha" => '$2y$10$tyuXGdFOTQtkPnU1solDm.NEC.DehELUlBPPmItJk8DhAbQGX/1bG', 
        ],
    ];
    
    //print_r($db);

    foreach ($db as $usuarios) {
        $usuario_valido = $usuario === $usuarios["usuario"];
        $senha_valida = password_verify($senha, $usuarios["senha"]);
        
        if (($usuario_valido) && ($senha_valida)){
            $_SESSION["erros"] = null;
            $_SESSION["nome"] = $usuarios["nome"];
            $_SESSION["usuario"] = $usuarios["usuario"];
            
            //Expiração do cookie em 30 dias
            $expiracao_cookie = time() + 86400 * 30;
            
            //Setar o cookie
            setcookie("usuario", $usuarios["usuario"], $expiracao_cookie);
            setcookie("nome", $usuarios["nome"], $expiracao_cookie);
            
            //Redireciona para a home
            header("Location: index.php"); // obs --------------------------------------------------!!!!!
        }
    }
    //Se tiver erros adiciona no array de erros
    if (!isset($_SESSION["usuario"])) {
        $_SESSION["erros"]= "<h1>Usuário ou Senha inválido</h1>";   // obs ------ Formatar cores -!!!!!
    }
}
?>

<!-- Teste  !!!!!  Codigos -->
    
<?php
    //Exibe os erros
    if (isset($_SESSION["erros"])) {
        ?>        
            <div class="card-panel red lighten-2"><?= $_SESSION["erros"]; ?></div> 
        <?php    
        //Limpa os erros apos exibir os mesmos                          obs ------!!!!!!
        $_SESSION["erros"] = null;
    }
?>
   

<!-- obs -------------PHP acima------------------------------------------ !!!!! ------>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login Gestão Central</title>
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
            top: 50%;
            left: 50%;
            top: 50%;
            left: 50%;
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

    <a class="navbar-brand" href="index.php">
            <img src="img/tellu_round.png" style="height:40px; vertical-align: middle">  
            <!-- Teste Imagem -->
    </a>
    
    <div class="container text-center">
        <div class="col-lg-3 offset-lg-4">
            
            <form action="login.php" method="post">  <!--obs !!!!!!! ---> 

                <div class="form-group">
                    <h1 class="titulo">Entre</h1>

                    <input type="username" class="form-control" id="usuario" name="usuario"
                    aria-describedby="usuario" placeholder="Seu login"> <!--obs---> 
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="senha"
                    aria-describedby="senha" placeholder="Sua senha"> <!--obs---> 

                    <!-- <button type="submit" name="action" class="form-control"  id="senha" name="senha"
                    aria-describedby="senha" placeholder="Sua senha"
                    value="enviar">Teste </button> -->
                </div>
                <button type="submit" id="login" name="enviar" value="Enviar">Login</button> <!--obs!!!!!!!!!!!!!---> 
            </form><br>

            <!-- <button type="submit" id="login" name="enviar" value="Enviar">Login</button> obs!!!!!!!!!!!!!-  -->

            <a href="cadastro.php"><button>Cadastre-se</button></a>
            <div class="mt-5" id="output"></div>
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
</body>
</html>