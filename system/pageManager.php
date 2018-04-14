<?php

if(isset($page)){

    switch ($page) {
        case "cadastrarClientePj":
            include '../pages/costumer/pj/cadastrarClientePj.php';
            break;
        
        case "consultarCliente":
            include '../pages/costumer/consultarCliente.php';
            break;
    
        default:
            echo "Page not found";
            break;
    }

}





?>