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
    <title>BSnS Manager 1.0 - Cadastrar Cliente PJ</title>
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
                    <div class="form-group col-md-6">
                        <label >Responsável</label>
                        <input type="text" class="form-control form-control-sm" id="responsavel"  required>
                    </div>
                    <div class="form-group col-md-5">
                        <label>CNPJ</label>
                        <input type="text" class="form-control form-control-sm" id="cnpj"  required>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Razão Social</label>
                        <input type="text" class="form-control form-control-sm" id="razao"  required>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Setor</label>
                        <select id="setor" class="form-control form-control-sm" required>
                            <option></option>
                            <option>Alimentos e Bebidas</option>
                            <option>Arte e Antiguidades</option>
                            <option>Artigos Religiosos</option>
                            <option>Assinaturas e Revistas</option>
                            <option>Automóveis e Veículos</option>
                            <option>Bebês e Cia</option>
                            <option>Blu-Ray</option>
                            <option>Brindes / Materiais Promocionais</option>
                            <option>Brinquedos e Games</option>
                            <option>Casa e Decoração</option>
                            <option>CDs</option>
                            <option>Colecionáveis</option>
                            <option>Compras Coletivas</option>
                            <option>Construção e Ferramentas</option>
                            <option>Cosméticos e Perfumaria</option>
                            <option>Cursos e Educação</option>
                            <option>Discos de Vinil</option>
                            <option>DVDs</option>
                            <option>Eletrodomésticos</option>
                            <option>Eletrônicos</option>
                            <option>Emissoras de Rádio</option>
                            <option>Emissoras de Televisão</option>
                            <option>Empregos</option>
                            <option>Empresas de Telemarketing</option>
                            <option>Esporte e Lazer</option>
                            <option>Fitas K7 Gravadas</option>
                            <option>Flores, Cestas e Presentes</option>
                            <option>Fotografia</option>
                            <option>HD-DVD</option>
                            <option>Igrejas / Templos / Instituições Religiosas</option>
                            <option>Indústria, Comércio e Negócios</option>
                            <option>Infláveis Promocionais</option>
                            <option>Informática</option>
                            <option>Ingressos</option>
                            <option>Instrumentos Musicais</option>
                            <option>Joalheria</option>
                            <option>Lazer</option>
                            <option>LD</option>
                            <option>Livros</option>
                            <option>MD</option>
                            <option>Moda e Acessórios</option>
                            <option>Motéis</option>
                            <option>Música Digital</option>
                            <option>Natal</option>
                            <option>Negócios e Oportunidades</option>
                            <option>Outros Serviços</option>
                            <option>Outros Serviços de Avaliação</option>
                            <option>Papelaria e Escritório</option>
                            <option>Páscoa</option>
                            <option>Pet Shop</option>
                            <option>Saúde</option>
                            <option>Serviço Advocaticios</option>
                            <option>Serviço de Distribuição de Jornais / Revistas</option>
                            <option>Serviços Administrativos</option>
                            <option>Serviços Artísticos</option>
                            <option>Serviços de Abatedouros / Matadouros</option>
                            <option>Serviços de Aeroportos</option>
                            <option>Serviços de Agências</option>
                            <option>Serviços de Aluguel / Locação</option>
                            <option>Serviços de Armazenagem</option>
                            <option>Serviços de Assessorias</option>
                            <option>Serviços de Assistência Técnica / Instalações </option>
                            <option>Serviços de Associações</option>
                            <option>Serviços de Bancos de Sangue</option>
                            <option>Serviços de Bibliotecas</option>
                            <option>Serviços de Cartórios</option>
                            <option>Serviços de Casas Lotéricas</option>
                            <option>Serviços de Confecções</option>
                            <option>Serviços de Consórcios</option>
                            <option>Serviços de Consultorias</option>
                            <option>Serviços de Cooperativas</option>
                            <option>Serviços de Despachante</option>
                            <option>Serviços de Engenharia</option>
                            <option>Serviços de Estacionamentos</option>
                            <option>Serviços de Estaleiros</option>
                            <option>Serviços de Exportação / Importação</option>
                            <option>Serviços de Geólogos</option>
                            <option>Serviços de joalheiros</option>
                            <option>Serviços de Leiloeiros</option>
                            <option>Serviços de limpeza</option>
                            <option>Serviços de Loja de Conveniência</option>
                            <option>Serviços de Mão de Obra</option>
                            <option>Serviços de Órgão Públicos</option>
                            <option>Serviços de Pesquisas</option>
                            <option>Serviços de Portos</option>
                            <option>Serviços de Saúde / Bem Estar</option>
                            <option>Serviços de Seguradoras</option>
                            <option>Serviços de Segurança</option>
                            <option>Serviços de Sinalização</option>
                            <option>Serviços de Sindicatos / Federações</option>
                            <option>Serviços de Traduções</option>
                            <option>Serviços de Transporte</option>
                            <option>Serviços de Utilidade Pública</option>
                            <option>Serviços em Agricultura / Pecuária / Piscicultura</option>
                            <option>Serviços em Alimentação</option>
                            <option>Serviços em Arte</option>
                            <option>Serviços em Cine / Foto / Som</option>
                            <option>Serviços em Comunicação</option>
                            <option>Serviços em Construção</option>
                            <option>Serviços em Ecologia / Meio Ambiente</option>
                            <option>Serviços em Eletroeletrônica / Metal Mecânica</option>
                            <option>Serviços em Festas / Eventos</option>
                            <option>Serviços em Informática</option>
                            <option>Serviços em Internet</option>
                            <option>Serviços em Jóias / Relógios / Óticas</option>
                            <option>Serviços em Telefonia</option>
                            <option>Serviços em Veículos</option>
                            <option>Serviços Esotéricos / Místicos</option>
                            <option>Serviços Financeiros</option>
                            <option>Serviços Funerários</option>
                            <option>Serviços Gerais</option>
                            <option>Serviços Gráficos / Editoriais</option>
                            <option>Serviços para Animais</option>
                            <option>Serviços para Deficientes</option>
                            <option>Serviços para Escritórios</option>
                            <option>Serviços para Roupas</option>
                            <option>Serviços Socias / Assistenciais</option>
                            <option>Sex Shop</option>
                            <option>Shopping Centers</option>
                            <option>Tabacaria</option>
                            <option>Tarifas Bancárias</option>
                            <option>Tarifas Telefônicas</option>
                            <option>Telefonia</option>
                            <option>Turismo</option>

                        </select>
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

