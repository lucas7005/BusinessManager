<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header("Location: ../index.php");
        exit;
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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="../assets/css/sysStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

        <div class="menu">
                   
            <li>
                <a href=""><i class="far fa-address-book"></i> Clientes</a>
                    <ul>
                        <li><a href="cadastrarClientePf.php">Cadastrar PF</a></li>
                        <li><a href="cadastrarClientePj.php">Cadastrar PJ</a></li>
                        <li><a href="consultarCliente.php">Consultar</a></li>         
                    </ul>
            </li>
            <li>
                <a href=""><i class="fas fa-barcode"></i> Produtos</a>
                    <ul>
                        <li><a href="cadastrarProduto.php">Cadastrar</a></li>
                        <li><a href="consultarProduto.php">Consultar</a></li>
                        <li><a href="#">Estoque</a></li>
                    </ul>
            </li>
            <li><a href=""><i class="fas fa-archive"></i> Itens</a>
                    <ul>
                        <li><a href="cadastrarItem.php">Cadastrar</a></li>
                        <li><a href="consultarItem.php">Consultar</a></li>
                        <li><a href="#">Estoque</a></li>
                    </ul>
            </li>
            <li>
                <a href=""><i class="fas fa-cart-plus"></i> Pedidos</a>
                <ul>
                    <li><a href="">Novo</a></li>
                    <li><a href="">Consultar</a></li>            
                </ul>

            </li>
            <li>
                <a href=""><i class="far fa-list-alt"></i> Orçamento</a>
                <ul>
                    <li><a href="">Novo</a></li>
                    <li><a href="">Consultar</a></li>            
                </ul>

            </li>
            <li><a href=""><i class="fas fa-file"></i> Relatórios</a></li>
            <li><a href=""><i class="fas fa-file-alt"></i> Nf-e</a></li>
            
            <li style="float:right; background-color: rgb(57, 33, 189)"><a href="master.php?log=logout">Sair</a></li>
            <li style="float:right"><a href=""><i class="fas fa-cogs"></i></a></li>      
        </div>
    
</body>
</html>

<?php

if(isset($_GET['log'])){

    if($_GET['log'] == "logout"){

        unset($_SESSION['login']);
        header("Location: ../index.php");
        
    }
}


?>