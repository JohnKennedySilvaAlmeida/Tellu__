<?php  

    // Verificar se o usuario efetuou o login

    function validar_sessao(){

        if (isset($_COOKIE["usuario"])) {

            $_SESSION["usuario"] = $_COOKIE["usuario"];

            $_SESSION["nome"] = $_COOKIE["nome"];

        }

        if (!isset($_SESSION["usuario"])) {

            $_SESSION["erros"]= "Favor efetuar o login";

            
            echo    "<script>

                window.location.href=\"login.php\"; 

            </script>";
            //   obs-------teste --   document.location=\"login.php\";   logica------------!!!!!!!!!!!!
            exit;
        }    

    }

    //Exibir o usuario logado

    function usuario_logado () {

        if (isset($_COOKIE["usuario"])) {

            $_SESSION["usuario"] = $_COOKIE["usuario"];

            $_SESSION["nome"] = $_COOKIE["nome"];

        } 

        $retorno = "";

        if (isset($_SESSION["nome"])) {

            $retorno = $_SESSION["nome"];

        } else {

            $retorno = "User";

        }

        echo $retorno;

    }



?>