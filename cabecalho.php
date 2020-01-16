<?php 
    include('functions.php');
    //Inicia a sessão
    // session_start();  

    // include('functions.php')
    

    // if (!isAdmin()) {
    //     $_SESSION['msg'] = "Você deve fazer login primeiro";
    //     header('location: login1.php');
    // }
    
    // if (isset($_GET['logout'])) {
    //     session_destroy();
    //     unset($_SESSION['user']);
    //     header("location: login1.php");
    // }


    /// usuario - admim - Index ---------------------------------
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        crossorigin="anonymous"></script>
    <title>Tellu</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-80px";
            }
            prevScrollpos = currentScrollPos;
        } 
    </script>
</head>

<header>

    <nav class="navbar navbar-expand-lg fixed-top text-right azul shadow" id="navbar">
      
    <a class="navbar-brand" href="index.php">
        <img src="img/tellu_round.png" style="height:40px; vertical-align: middle">  
    </a>

    <!-- ?php  -->
        <!-- //Verifica que está logado;
        // usuario_logado();     -->
    <!-- ?>   --> 



   <!-- teste=======================================***************************************** -->
    <div class="content">

		<!-- notifica mensagem -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- informações do usuário logado -->
		<div class="profile_info">
			<!-- <img src="images/user_profile.png"  > -->
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small> 
						<i  style="color: White;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>  
					    	<br>
                            <!-- <a href="home.php?logout='1'" style="color: red;">Sair</a>
                            &nbsp; -->

                        <?php  if (isAdmin()) : ?>    
					    	<a href="create_produto.php" style="color: red;">+ add</a>
                        <?php endif ?>  

                        <!-- &nbsp;  ---     OBS!!!!!!!!!!!! user e admim  rever        -->
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>


<!-- teste *******************************acima --------------------------------------------------------- -->




        <button class="navbar-toggler text-right" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon text-white">...</span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle textoBranco" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="frutas.php">Frutas</a>
                        <a class="dropdown-item" href="verduras.php">Verduras</a>
                        <a class="dropdown-item" href="mel.php">Mel</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link textoBranco" href="login1.php">Login</a></li>
                <li class="nav-item"><a class="nav-link textoBranco" href="carrinho.php">Carrinho</a></li>
               
               <!-- /// sair ---- teste acima  -->
               
                <!-- <li class="nav-item"><a class="nav-link textoBranco" href="index.php?logout='1'">Sair</a></li> -->

                <li class="nav-item"><a class="nav-link textoBranco" href="login1.php?logout='1'">Sair</a></li>
                 
                        
                
            </ul>
        </div>
    </nav>
    </nav>
    
    
</header>