<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">



</head>

<body>
    <?php include("header.php") ?>
    <div class="container-fluid">
        <div class="row mt-5">
            <!--1º Coluna-->
            <div class="col-md-5" style="background-color: #9370DB; color:white;">
                <br><br><br><br><br><br><br>
                <div style="position: fixed;" class="ml-3 pl-3 text-center">
                    <h3> <i class="fas fa-highlighter"></i> Olá, seja bem vindo!</h3>
                    <h1> Cadastro de Fornecedor</h1>
                    <button type="button" class="btn btn-outline-light mt-4" value="Voltar" onclick="javascript: location.href='index.php';" style="border-radius: 25px;">Voltar</button>
                </div>
                <!--redireciona para a tela indicada-->
            </div>

            <!--2º Coluna-->
            <div class="col-md-7 p-5">
                <h2 class="text-center" style="color: #9370DB;"> <i class="far fa-copy"></i> Criar Cadastro </h2>
                <hr class="mb-5">
                <!--Início do Form-->
                <form method="post" action="efetuar_cad_fornecedor.php">
                    <!-- Ele envia os dados para tela de cadastro-->
                    <!-- 1° linha-->
                    <div class="form-row">
                        <div class="col-md-7 mb-3">
                            <label for="exampleInputRazao">Razão Social</label>
                            <input class="form-control" type="text" name="txtRazaoSocial" id="exampleInputRazao" aria-describedby="razao_social" placeholder="Digite sua Razao Social">
                        </div>
                        <div class="col-md-5">
                            <label for="exampleInputCnpj">CNPJ</label>
                            <input class="form-control" type="text" name="txtCnpj" id="exampleInputCnpj" aria-describedby="cnpj" placeholder="Digite seu CNPJ">
                        </div>
                    </div>
                    <!-- 2° linha-->
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="exampleInputData_Abertura">Data de Abertura</label>
                            <input type="date" class="form-control" name="txtdataabertura" id="exampleInputData_Abertura" aria-describedby="data_abertura">
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputRegime">Regime</label>
                            <select class="form-control" name="txtregime" id="exampleInputRegime">
                                <option value="SimplesNac">Simples Nacinal</option>
                                <option value="LucroPres">Lucro Presumido</option>
                                <option value="LucroReal">Lucro Real</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="exampleInputTipo" class="col-md-3 control-label">Tipo</label>
                            <select class="form-control" name="txttipo" id="exampleInputTipo">
                                <option value="Microempresa">ME</option>
                                <option value="Eireli">Eireli</option>
                                <option value="EPP">EPP</option>
                                <option value="SocLimitada"> Ltda</option>
                                <option value="SA">SA</option>
                            </select>
                        </div>

                    </div>
                    <!-- 3° linha-->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="exampleInputInscricaoEstadual"> Inscrição Estadual</label>
                            <input type="text" class="form-control" name="txtinscricao_estadual" id="exampleInputInscricaoEstadual" aria-describedby="inscricao_estadual" placeholder="Inscrição Estadual">
                        </div>
                        <br>
                        <!-- <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">Isento</label>
                        </div>-->
                        <div class="col-md-6">
                            <label for="exampleInputInscricaoMunicipal">Inscrição Municipal</label>
                            <input type="text" class="form-control" name="txtinscricao_municipal" id="exampleInputInscricaoMunicipal" aria-describedby="inscricao_municipal" placeholder="Inscrição Municipal">
                        </div>
                    </div>
                    <!-- 4° linha-->
                    <div class="form-row">
                        <div class="col-md-7 mb-3">
                            <label for="representante">Representante</label>
                            <input type="text" class="form-control" name="txtrepresentante" id="exampleInputInscricaoRepresentante" aria-describedby="representante" placeholder=" Nome do Representante">
                        </div>
                        <div class="col-md-5">
                            <label for="exampleInputTelefone"> Telefone </label>
                            <input type="text" class="form-control" name="txttelefone" id="exampleInputTelefone" aria-describedby="Telefone" placeholder="Digite o Telefone">
                        </div>
                    </div>
                    <!-- 5° linha-->
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="exampleInputCelular">Celular</label>
                            <input type="text" class="form-control" name="txtcelular" id="exampleInputCelular" aria-describedby="celular" placeholder="Digite o Celular">
                        </div>
                        <div class="col-md-7">
                            <label for="exampleInputEmail">E-mail</label>
                            <input type="email" class="form-control" name="txtemail" id="exampleInputEmail" aria-describedby="email" placeholder="Digite seu email">
                        </div>
                    </div>
                    <!-- 6° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-5 mb-3">
                            <label for="exampleInputRua">Rua</label>
                            <input type="text" class="form-control" name="txtrua" id="exampleInputRua" aria-describedby="rua" placeholder="Rua">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputNumero">Numero</label>
                            <input type="text" class="form-control" name="txtnumero" id="exampleInputNumero" aria-describedby="numero" placeholder="Numero">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputBairro">Bairro</label>
                            <input type="text" class="form-control" name="txtbairro" id="exampleInputBairro" aria-describedby="bairro" placeholder="Bairro">
                        </div>
                        <div class="form-group col-md-2">

                            <label for="uf">Estado</label>
                            <select class="form-control" name="txtuf">
                                <option value="Acre">AC</option>
                                <option value="Alagoas">AL</option>
                                <option value="Amapa">AP</option>
                                <option value="Amazonas">AM</option>
                                <option value="Bahia">BA</option>
                                <option value="Ceara">CE</option>
                                <option value="EspíritoSanto">ES</option>
                                <option value="Goiás">GO</option>
                                <option value="Maranhão">MA</option>
                                <option value="Mato Grosso">MT</option>
                                <option value="Mato Grosso do Sul">MS </option>
                                <option value="Minas Gerais">MG</option>
                                <option value="Pará">PA</option>
                                <option value="Paraíba">PB</option>
                                <option value="Paraná">PR</option>
                                <option value="Pernambuco">PE</option>
                                <option value="Piauí">PI</option>
                                <option value="Rio de Janeiro">RJ</option>
                                <option value="Rio Grande do Norte">RN</option>
                                <option value="Rio Grande do Sul">RS</option>
                                <option value="Rondônia">RO</option>
                                <option value="Roraima">RR</option>
                                <option value="Santa Catarina">SC</option>
                                <option value="São Paulo">SP</option>
                                <option value="Sergipe">SE</option>
                                <option value="Tocantins">TO</option>
                            </select>
                        </div>
                    </div>
                    <!-- 7° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="exampleInputCep">CEP</label>
                            <input type="text" class="form-control" name="txtcep" id="exampleInputCEP" aria-describedby="cep" placeholder="Digite seu CEP">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputComplemento">Complemento</label>
                            <input type="text" class="form-control" name="txtcomplemento" id="exampleInputComplemento" aria-describedby="complemento" placeholder="Complemento">
                        </div>
                    </div>
                    <!-- 8º linha -->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="exampleInputSite">Site</label>
                            <input type="text" class="form-control" name="txtsite" id="exampleInputSite" aria-describedby="site" placeholder="Digite um site">
                        </div>
                        <div class="col-md-6">

                            <label for="exampleInputEmail_cobranca">E-mail de Cobrança e envio de XML</label>
                            <input type="email" class="form-control" name="txtemail_cobranca" id="exampleInputEmail_cobranca" aria-describedby="email_cobranca" placeholder="Digite um email">
                        </div>

                    </div>
                    <!-- 9° linha -->
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-3">
                            <label for="exampleInputNome">Observação</label>
                            <textarea name="txtobs" cols="30" rows="3" class="form-control" placeholder="Digite uma observação"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="btnca" class="btn m-4" style="background-color: #9370DB; color:white; border-radius: 25px;" value="cadastrar">Cadastrar</button>
                    </div>
                    <!--Submeter via post para a pag efetuar cadastro.php-->
                </form>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>