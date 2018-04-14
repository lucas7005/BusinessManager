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
    <title>BSnS Manager 1.0 - Cadastrar Cliente PF</title>
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

        <div id="formCadastroCliente">
            <form>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label >CEP</label>
                        <input type="text" class="form-control form-control-sm" id="zipCode"  required>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label >Nome</label>
                        <input type="text" class="form-control form-control-sm" id="nome"  required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control form-control-sm" id="sobrenome"  required>
                    </div>
                    <div class="form-group col-md-3">
                        <label>CPF</label>
                        <input type="text" class="form-control form-control-sm" id="cpf" >
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label >Endereço</label>
                        <input type="text" class="form-control form-control-sm" id="adress" >
                    </div>
                    <div class="form-group col-md-3">
                        <label >Número</label>
                        <input type="text" class="form-control form-control-sm" id="adressNumber" >
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label >Bairro</label>
                        <input type="text" class="form-control form-control-sm" id="bairro" >
                    </div>
                    <div class="form-group col-md-3">
                        <label >Cidade</label>
                        <input type="text" class="form-control form-control-sm" id="city" >
                    </div>
                    <div class="form-group col-md-4">
                     <label>Estado</label>
                     <select id="uf" class="form-control form-control-sm" >
                        <option></option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                     </select>
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Complemento</label>
                        <input type="text" class="form-control form-control-sm" id="complement">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Observação</label>
                        <input type="text" class="form-control form-control-sm" id="note">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
   
</body>
</html>

