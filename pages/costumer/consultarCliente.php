<?php

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

?>

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

