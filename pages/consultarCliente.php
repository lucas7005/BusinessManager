<?php

session_start();

if (!isset($_SESSION['login'])) {
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
    <title>BSnS Manager 1.0 - Consultar Cliente PF</title>
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

        <div id="new-header"></div>

        <div id="tableConsult">
            
            <form id="consultProduct" action="">
                <div class="row">

                    <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" id="codeSearch" class="form-control form-control-sm" placeholder="Código">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary btn-sm" type="button">Go!</button>
                            </span>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" id="nameSearch" class="form-control form-control-sm" placeholder="Nome">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary btn-sm" type="button">Go!</button>
                            </span>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="input-group">
                            <input type="text" id="searchByCpjOrCnpj" class="form-control form-control-sm" placeholder="CPF ou CNPJ">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary btn-sm" type="button">Go!</button>
                            </span>
                        </div>
                     </div>

                </div>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Teste</th>
                    <th>Teste</th>
                    <th>Teste</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Larry</td>
                        <td>Larry</td>
                        <td>Larry</td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>
