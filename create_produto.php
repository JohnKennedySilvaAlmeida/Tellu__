<?php include('functions.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tellu</title>   <!--  ou criar produto - mesma logica  -->

	<link rel="stylesheet" type="text/css" href="style.css">

<!-- 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->


	<style>
		.header {
			/* background: #003366; */
			background: #80179b;
		}
		button[name=register_btn1] {
			background: #80179b;
		}
		
	</style>
	
</head>

<body>
    
	 <br>

	<a class="navbar-brand" href="index.php">                                                                          
            <img src="img/tellu_round.png" style="height:40px; vertical-align: middle">  
            <!-- Teste Imagem -->
    </a>


	<div class="header">
		<h2 style="color:White">Cadastro</h2> 

		<!-- // CRIAR NOVO USUARIO ADM,USER TIPO    // OU ADD PRODUTO MSM LOGICA -->
	</div>
	
	<form method="post" action="create_produto.php">


		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nome do Produto</label>
			<input type="text" name="nome" value="<?php echo $nome; ?>">
            <!-- <input type="text" name="produto" value=""> -->
		</div>
		<div class="input-group">                                                             <!--  funcoes PHP  criar variaveis e funcoes  -->
			<label>Valor</label>
			<input type="text" name="valor" value="<?php echo $valor; ?>">
            <!-- <input type="text" name="valor" value=""> -->
		</div>
		<div class="input-group">
			<label>Categoria</label>
			<!-- <select name="user_type" id="user_type" > -->
			<select name="categoria" id="categoria" >
				<option value=""></option>
				<option value="verdura">Verduras</option>
				<option value="mel">Mel</option>    <!--  Obs   -->
                <option value="fruta">Frutas</option>  <!--  Obs   -->
				<option value="fruta">Naturais</option>
				<option value="fruta">Vinhos</option>
				<option value="fruta">Queijo</option>
			</select>
		</div>







		<!-- <div class="input-group">
			<label>Img</label>
			<input type="" name="imagem">
		</div> -->
        <!--
		<div class="input-group">
			<label>Confirmar Senha</label>
			<input type="password" name="password_2">
		</div> -->
        

		



                


         <!-- obs                                               usar logica professor excluir e add e alterar  -->


		<div class="input-group">
			<!-- <button type="submit" class="btn" name="register_btn"> + Create user</button>                                               register_bt -->
		    <button style="color:White" type="submit" class="btn" name="register_btn1">  Criar Produto</button>
            <button style="color:White" type="submit" class="btn" name="#">  Alterar Produto</button>
            <button style="color:White" type="submit" class="btn" name="#">  Alterar Produto</button>
		</div>

        <!-- <div class="input-group"> -->
			<!-- <button type="submit" class="btn" name="register_btn"> + Create user</button> -->
		    <!-- <button style="color:White" type="submit" class="btn" name="#"> + Alterar Produto</button>
		</div> -->

        <!-- <div class="input-group"> -->
			<!-- <button type="submit" class="btn" name="register_btn"> + Create user</button> -->
		    <!-- <button style="color:White" type="submit" class="btn" name="#"> + Excluir Produto</button> -->
		<!-- </div> -->


	</form>
	
</body>
</html>