<?php

include("logica-usuario.php");

//VERIFICA SE FOI LOGADO
verificaUsuario();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>

    <?php
    include_once('conexao.php');
    //RECUPERAÇÃO
    $codigo = $_GET['codigo'];

    //CRIANDO A LINHA DO SELECT
    $sqlconsulta = "select * from fornecedor where id = '$codigo'";

    //EXECUTANDO INSTRUÇÃO
    $resultado = @mysqli_query($conexao, $sqlconsulta);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location' . "'index.php'" . ';" value="voltar"<br><br>';
        die('<b> Query Invalida: </b>' . @mysqli_error($conexao));
    } else {
        $num = @mysqli_num_rows($resultado);
        if ($num == 0) {
            echo "<b> Codigo: </b> Não Localizado!!! <br> <br>";
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="voltar"<br><br>';
            exit;
        } else {
            $dado = mysqli_fetch_array($resultado);
        }
    }
    mysqli_close($conexao);
    ?>
    <?php include("header.php") ?>

    <div class="container-fluid">
        <div class="row mt-5">
            <!--1º Coluna-->
            <div class="col-md-5" style="background-color: #9370DB; color:white;">
                <br><br><br><br><br><br><br>
                <div style="position: fixed;" class="ml-3 pl-3 text-center">
                    <h1> Alteração de Cadastro</h1>
                    <h1> Fornecedor</h1> <br>
                    <i class="fas fa-people-carry" style="font-size: 100px;"></i><br><br>
                    <button type="button" class="btn btn-outline-light mt-4" value="Voltar" onclick="javascript: location.href='lista_fornecedor.php';" style="border-radius: 25px;">Voltar</button>
                </div>
                <!--redireciona para a tela indicada-->
            </div>

            <!--2º Coluna-->
            <div class="col-md-7 p-5">
                <h2 class="text-center" style="color: #9370DB;"> <i class="far fa-copy"></i> Alterar Cadastro </h2>
                <hr class="mb-5">
                <!--Início do Form-->
                <form method="post" action="alteracao_fornecedor.php">
                    <!-- Ele envia os dados para tela de cadastro-->
                    <!-- 1° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="exampleInputCodigo">Código</label>
                            <input type="text" class="form-control " name="txtid" value='<?php echo $dado['id']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="exampleInputRazao">Razão Social</label>
                            <input class="form-control" type="text" name="txtRazaoSocial" value='<?php echo $dado['razao_social']; ?>'>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="exampleInputCnpj">CNPJ</label>
                            <input class="form-control" type="text" name="txtCnpj" value='<?php echo $dado['cnpj']; ?>'>
                        </div>
                    </div>
                    <!-- 2° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-4 mb-3">
                            <label for="exampleInputData_Abertura">Data de Abertura</label>
                            <input type="text" class="form-control" name="txtdataabertura" value='<?php echo $dado['data_abertura']; ?>'>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputRegime">Regime</label>
                            <input type="text" class="form-control" name="txtregime" value='<?php echo $dado['regime']; ?>'>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleInputTipo" class="col-md-3 control-label">Tipo</label>
                            <input type="text" class="form-control" name="txttipo" value='<?php echo $dado['tipo']; ?>'>
                        </div>

                    </div>
                    <!-- 3° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="exampleInputInscricaoEstadual"> Inscrição Estadual</label>
                            <input type="text" class="form-control" name="txtinscricao_estadual" value='<?php echo $dado['inscricao_estadual']; ?>'>
                        </div>
                        <br>
                        <div class="form-group col-md-6">
                            <label for="exampleInputInscricaoMunicipal">Inscrição Municipal</label>
                            <input type="text" class="form-control" name="txtinscricao_municipal" value='<?php echo $dado['inscricao_municipal']; ?>'>
                        </div>
                    </div>
                    <!-- 4° linha-->
                    <div class="form-group form-row">
                        <div class="form-group col-md-7 mb-3">
                            <label for="representante">Representante</label>
                            <input type="text" class="form-control" name="txtrepresentante" value='<?php echo $dado['representante']; ?>'>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="exampleInputTelefone"> Telefone </label>
                            <input type="text" class="form-control" name="txttelefone" value='<?php echo $dado['telefone']; ?>'>
                        </div>
                    </div>
                    <!-- 5° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-5 mb-3">
                            <label for="exampleInputCelular">Celular</label>
                            <input type="text" class="form-control" name="txtcelular" value='<?php echo $dado['celular']; ?>'>
                        </div>
                        <div class="form-group col-md-7">
                            <label for="exampleInputEmail">E-mail</label>
                            <input type="email" class="form-control" name="txtemail" value='<?php echo $dado['email']; ?>'>
                        </div>
                    </div>
                    <!-- 6° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-5 mb-3">
                            <label for="exampleInputRua">Rua</label>
                            <input type="text" class="form-control" name="txtrua" value='<?php echo $dado['rua']; ?>'>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputNumero">Numero</label>
                            <input type="text" class="form-control" name="txtnumero" value='<?php echo $dado['numero']; ?>'>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputBairro">Bairro</label>
                            <input type="text" class="form-control" name="txtbairro" value='<?php echo $dado['bairro']; ?>'>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf">Estado</label>
                            <input tyoe="text" class="form-control" name="txtuf" value='<?php echo $dado['UF']; ?>'>
                        </div>
                    </div>
                    <!-- 7° linha-->
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="exampleInputCep">CEP</label>
                            <input type="text" class="form-control" name="txtcep" value='<?php echo $dado['CEP']; ?>'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputComplemento">Complemento</label>
                            <input type="text" class="form-control" name="txtcomplemento" value='<?php echo $dado['complemento']; ?>'>
                        </div>
                    </div>
                    <!-- 8º linha -->
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="exampleInputSite">Site</label>
                            <input type="text" class="form-control" name="txtsite" value='<?php echo $dado['site']; ?>'>
                        </div>
                        <div class="col-md-6">

                            <label for="exampleInputEmail_cobranca">E-mail de Cobrança e envio de XML</label>
                            <input type="email" class="form-control" name="txtemail_cobranca" value='<?php echo $dado['email_cobranca']; ?>'>
                        </div>

                    </div>
                    <!-- 9° linha -->
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-3">
                            <label for="exampleInputNome">Observação</label>
                            <textarea name="txtobservacoes"  cols="30" rows="3" class="form-control" value='<?php echo $dado['observacoes']; ?>'></textarea>
                        </div>
                    </div>


                    <div class="text-center mt-3">
                        <button type="submit" class="btn m-2 text-center" style="background-color:#9370DB; color:white; border-radius: 25px;" value="Alterar">Alterar</button>
                        <button type="reset" class="btn m-2 text-center" style="background-color:#9370DB; color:white; border-radius: 25px;" value="Limpar">Limpar</button>
                        <a href="excluir_fornecedor.php?codigo=<?php echo $dado['id']; ?>" class="btn btn-danger btn-excluir m-2" style="border-radius: 30px;" role="button">
                            <i class="far fa-trash-alt"></i> Excluir </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>