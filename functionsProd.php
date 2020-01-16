<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '123456', 'multi_login'); // OBS!!! criar ainda BD

// declaração de variável
$nome = "";
$valor    = "";
$errors   = array(); 

// chame a função register () se clicar em register_btn

if (isset($_POST['register_btn1'])) { //***********Nome do fomulario / BTN ,name, Butão ***********************
	register();
}                










// REGISTRAR USUÁRIO   -----     ENSERE USUARIO OU PRODUTO MSM LOGICA ************************************************************************

function register(){
	// chame essas variáveis ​​com a palavra-chave global para disponibilizá-las na função
	global $db, $errors, $nome, $valor;

	//recebe todos os valores de entrada do formulário. Chame a função e ()
	// definido abaixo para escapar dos valores do formulário

	
	$nome    =  e($_POST['nome']);
	$valor       =  e($_POST['valor']);
	$categoria  =  e($_POST['categoria']);
	// $password_2  =  e($_POST['password_2']);



	// validação do formulário: verifique se o formulário foi preenchido corretamente
	if (empty($nome)) { 
		array_push($errors, "Atenção"); 
	}
	if (empty($valor)) { 
		array_push($errors, "Campos"); 
	}
	if (empty($categoria)) { 
		array_push($errors, "Obrigatorios"); 
	}
	// if ($password_1 != $password_2) {
	// 	array_push($errors, "");
	// }

	// registra o usuário se não houver erros no formulário
	if (count($errors) == 0) {
		// $password = md5($password_1);// criptografa a senha antes de salvar no banco de dados

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO produto_ (nome, valor, cod_categoria) 
					  VALUES('$nome', '$valor', '$user_type')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Usuário criado com sucesso!";
			
			// header('location: home.php'); // locação **** index admim*************************************
			header('location: index.php');
		}else{
			$query = "INSERT INTO produto_ (nome, valor, cod_categoria) 
					  VALUES('$nome', '$valor', 'user', '$categoria')";
			mysqli_query($db, $query);

			// obtém o ID do usuário criado
			$logged_in_user_id = mysqli_insert_id($db);

			// $_SESSION['user'] = getUserById($logged_in_user_id); // coloca o usuário logado na sessão
			// $_SESSION['success']  = "Logado";

			header('location: index.php'); //25/11	// locação ****************home user***********************		
			//header('location: home.php');	
		}
	}
}


// CREATE TABLE `produto` (
// 	`id` int(10) NOT NULL,
// 	`nome` varchar(255) DEFAULT NULL,
// 	`valor` varchar(255) DEFAULT NULL,
// 	`cod_categoria` varchar(255) DEFAULT NULL,
//   ) 

// retorna a matriz do usuário de seu ID
// function getUserById($id){
// 	global $db;
// 	$query = "SELECT * FROM users WHERE id=" . $id;
// 	$result = mysqli_query($db, $query);

// 	$user = mysqli_fetch_assoc($result);
// 	return $user;
// }

// escape string
// function e($val){
// 	global $db;
// 	return mysqli_real_escape_string($db, trim($val));
// }

// -------------------------
// function display_error() {
// 	global $errors;

// 	if (count($errors) > 0){
// 		echo '<div class="error">';
// 			foreach ($errors as $error){
// 				echo $error .'<br>';
// 			}
// 		echo '</div>';
//     }
    
// }
// --------------------------
// function isLoggedIn()
// {
// 	if (isset($_SESSION['user'])) {
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

// function logoutt(){
// 	// desconecta o usuário se o botão logout tiver clicado  ***************************************** ******
// 	if (isset($_GET['logout'])) { // OBS!!!!!
		
// 		session_destroy();
		
// 		unset($_SESSION['user']);
		
// 		header("location: login1.php"); // locação ****************************************************************
// 	}

// 	// chame a função login () se clicar em register_btn
// 	if (isset($_POST['login_btn'])) {
// 		login();
// 	}
// }

// logoutt();

// ==================================

// // LOGIN USER
// function login(){
// 	global $db, $username, $errors;

// 	// valores do formulário grap
// 	$username = e($_POST['username']);
// 	$password = e($_POST['password']);

// 	// verifique se o formulário foi preenchido corretamente
// 	if (empty($username)) {
// 		array_push($errors, "<h5>!Atenção!</h5>");
// 	}
// 	if (empty($password)) {
// 		array_push($errors, "<h5>Preencher os Campos</h5>");
// 	}

// 	// tenta logar se não houver erros no formulário
// 	if (count($errors) == 0) {
// 		$password = md5($password);

// 		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
// 		$results = mysqli_query($db, $query);

// 		if (mysqli_num_rows($results) == 1) { // usuário encontrado
// 			// verifica se o usuário é administrador ou usuário
// 			$logged_in_user = mysqli_fetch_assoc($results);
// 			if ($logged_in_user['user_type'] == 'admin') {

// 				$_SESSION['user'] = $logged_in_user;
// 				$_SESSION['success']  = "Logado";

// 				// header('location: admin/home.php'); // locação*****ADMIM*********************************** 
// 				header('location: index.php');
// 			}else{
// 				$_SESSION['user'] = $logged_in_user;
// 				$_SESSION['success']  = "Logado";

// 				header('location: index.php');//25/11     // locação ******USER*******************
// 				//header('location: home.php');

// 			}
// 		}else {
// 			array_push($errors, "Combinação de nome de usuário / senha incorreta");
// 		}
// 	}
// }

// ========================

// function isAdmin()
// {
// 	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
// 		return true;
// 	}else{
// 		return false;
// 	}
// }