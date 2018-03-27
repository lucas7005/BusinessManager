<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header("Location: ../index.php");
        exit;
    }   

?>

<DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSnS Manager 1.0 - Cadastrar Produto</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="../assets/css/sysStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/javascript/main.js" ></script>
    <script src="../assets/javascript/clients.js" ></script>
    
</head>
<body>
    
    <div id="new-header">
        
    </div>

        <div id="formCadastroProduto">
            <form>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Código</label>
                        <input type="text" class="form-control form-control-sm" id="codigo" value="Teste" readonly>   
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Grupo</label>
                        <select id="grupo" class="form-control form-control-sm" required>
                            <option></option>
                            <option>Roupa</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tipo</label>
                        <select id="tipo" class="form-control form-control-sm" required>
                            <option></option>
                            <option>Camiseta</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Tamanho</label>
                        <select id="size" class="form-control form-control-sm" required>
                            <option></option>
                            <option>G</option>
                        </select>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Nome</label>
                        <input type="text" class="form-control form-control-sm" id="name" >
                    </div>
                    <div class="form-group col-md-4">
                        <label>Unidade de Medida</label>
                        <select id="unity" class="form-control form-control-sm" required>
                            <option></option>
                            <option>Metro</option>
                            <option>Un</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Custo</label>
                        <input type="text" class="form-control form-control-sm" id="custo" >
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label >Descrição</label>
                        <input type="text" class="form-control form-control-sm" id="description" >
                    </div>
                    <div class="form-group col-md-3">
                        <label>Preço</label>
                        <input type="text" class="form-control form-control-sm" id="price" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Lucro</label>
                        <input type="text" class="form-control form-control-sm" id="profit" value="R$3,00" readonly>   
                    </div>
                    <div class="form-group col-md-3">
                        <label>Lucro %</label>
                        <input type="text" class="form-control form-control-sm" id="profitPercent" value="3%" readonly>   
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

   
</body>
</html>

