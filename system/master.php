<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

if (isset($_GET['log'])) {

    if ($_GET['log'] == "logout") {

        unset($_SESSION['login']);
        header('Location: ../index.php');

    }
}

?>

<DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSnS Manager 1.0</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../assets/css/sysStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/javascript/main.js" ></script>
    <script src="../assets/javascript/clients.js" ></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
</head>
<body>

        <div class="menu-container">
            <ul class="menu clearfix">
                <li><a href=""><i class="far fa-address-book"></i> Clientes</a>
                    <!-- Nível 1 -->
                    <!-- submenu -->
                    <ul class="sub-menu clearfix">
                        <li><a href="#">Clientes PJ</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="?page=cadastrarClientePj">Cadastrar</a></li>
                                <li><a href="?page=consultarCliente">Consultar</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                        <li><a href="#">Clientes PF</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Cadastrar</a></li>
                                <li><a href="#">Consultar</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                    </ul><!-- submenu -->
                </li>
                <li><a href="#"><i class="fas fa-warehouse"></i> Estoque</a>
                    <!-- Nível 1 -->
                    <!-- submenu -->
                    <ul class="sub-menu clearfix">
                        <li><a href="#">Produtos</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Cadastrar</a></li>
                                <li><a href="#">Consultar</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                        <li><a href="#">Itens</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Cadastrar</a></li>
                                <li><a href="#">Consultar</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                        <li><a href="#">Relatório</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#"></a></li>
                                <li><a href="#">Consultar</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                    </ul><!-- submenu -->
                </li>
                <li><a href="#"><i class="fas fa-money-bill-alt"></i> Financeiro</a>
                    <!-- Nível 1 -->
                    <!-- submenu -->
                    <ul class="sub-menu clearfix">
                        <li><a href="#">NFe</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Emitir NF</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                        <li><a href="#">Relatórios</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Pedidos</a></li>
                                <li><a href="#">Orçamentos</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                    </ul><!-- submenu -->
                </li>
                <li><a href="#"><i class="fas fa-shopping-basket"></i> Vendas</a>
                    <!-- Nível 1 -->
                    <!-- submenu -->
                    <ul class="sub-menu clearfix">
                        <li><a href="#">Pedidos</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Novo</a></li>
                                <li><a href="#">Consulta</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                        <li><a href="#">Orçamento</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Novo</a></li>
                                <li><a href="#">Consulta</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                        <li><a href="#">Relatórios</a>
                            <!-- Nível 2 -->
                            <!-- submenu do submenu -->
                            <ul class="sub-menu">
                                <li><a href="#">Pedidos</a></li>
                                <li><a href="#">Orçamentos</a></li>
                            </ul><!-- submenu do submenu -->
                        </li>
                    </ul><!-- submenu -->
                </li>
                <li style="float:right"><a href="?log=logout">Sair</a></li>
            </ul>
        </div>

</body>
</html>

<?php



if(isset($_GET['page'])){
    $page = $_GET['page'];    
}

include 'pageManager.php'


?>