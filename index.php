
<?php 

    // include("funcoeLogin.php");     // validar sessão se esta logado
    include("cabecalho.php");         // cabeçalho tellu 




    // if (!isLoggedIn()) {
    //     $_SESSION['msg'] = "Você deve entrar primeiro";
    //     header('location: login.php');
    // }    
    //                 !!!obs!!! mult - login

?> 



<body>
    <div>
        <img src="img/banner.png" style="width: 100%">
    </div>

    <div class="container mt-4 mb-5">
        <div class="card-deck">
            <div class="card shadow">
                <img src="img/ecommerce.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">O que é o Tellu</h4>
                    <p class="card-text">O Tellu é uma plataforma de ecommerce de alimentos do campo.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/supermercado.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Qual é o problema?</h4>
                    <p class="card-text">Pequenos produtore não conseguem vender seus produtos se não recorrerem a
                        grandes
                        supermercados. A concorrência é grande e nem sempre eles saem ganhando.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/fazenda.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Qual a solução?</h4>
                    <p class="card-text">Por que depender de grandes supermercados se você pode comprar e vender na
                        internet?
                        É aí que entra o Tellu! Um ecommerce feito para quem quer que seu produto seja visto e para quem
                        quer evitar
                        aimentos industrializados e produzidos em massa.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <!-- ==================================================================================================================== -->
        <h1 class="text-center textoVermelho mt-4">Nossos Produtos</h1>
        <div class="card-deck mt-3 mb-5">
            <div class="card shadow">
                <img src="img/Frutas/bananaPrata.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Banana Prata</h4>
                    <div class="text-center">
                            <h2><span style="font-size:20px">R$ </span>4,99</h2>
                            <a href="banana.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                        </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/Frutas/maca.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Maçã Gala</h4>
                    <div class="text-center">
                            <h2><span style="font-size:20px">R$ </span>6,48</h2>
                            <a href="maca.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                        </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/Frutas/laranja.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Laranja</h4>
                    <div class="text-center">
                        <h2><span style="font-size:20px">R$ </span>4,98</h2>
                        <a href="laranja.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/Frutas/goiaba.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Goiaba</h4>
                    <div class="text-center">
                        <h2><span style="font-size:20px">R$ </span>10,90</h2>
                        <a href="goiaba.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck mt-3 mb-5">
            <div class="card shadow">
                <img src="img/mel/melSilvestre.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Mel Silvestre</h4>
                    <div class="text-center">
                        <h2><span style="font-size:20px">R$ </span>10,90</h2>
                            <a href="melSilvestre.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                        </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/Mel/melEucalipto.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Mel de Eucalípto</h4>
                    <div class="text-center">
                            <h2><span style="font-size:20px">R$ </span>10,90</h2>
                            <a href="melEucalipto.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                        </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/mel/melOrganico.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Mel Orgânico</h4>
                    <div class="text-center">
                        <h2><span style="font-size:20px">R$ </span>10,90</h2>
                        <a href="melOrganico.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/mel/melFloradaAcacia.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Mel Florada Acácia</h4>
                    <div class="text-center">
                        <h2><span style="font-size:20px">R$ </span>10,90</h2>
                        <a href="melFlorada.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck mt-3 mb-5">
            <div class="card shadow">
                <img src="img/Verduras/tomate.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Tomate</h4>
                    <div class="text-center">
                            <h2><span style="font-size:20px">R$ </span>5,99</h2>
                            <a href="tomate.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                        </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/Verduras/cenoura.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Cenoura</h4>
                    <div class="text-center">
                            <h2><span style="font-size:20px">R$ </span>6,48</h2>
                            <a href="cenoura.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                        </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/Verduras/couve.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Couve</h4>
                    <div class="text-center">
                        <h2><span style="font-size:20px">R$ </span>4,98</h2>
                        <a href="couve.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <img src="img/Verduras/alface.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Alface</h4>
                    <div class="text-center">
                        <h2><span style="font-size:20px">R$ </span>10,90</h2>
                        <a href="alface.php"><button class="btn btn-info" style="width:100%">Comprar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>


<?php

    include("rodape.php");       // rodape tellu

?>


