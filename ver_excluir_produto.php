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
    $sqlconsulta = "select * from produto where id = '$codigo'";

    //EXECUTANDO INSTRUÇÃO
    $resultado = @mysqli_query($conexao, $sqlconsulta);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location' . "'index.php'" . ';" value="voltar"<br><br>';
        die('<b> Query Invalida: </b>' . @mysqli_error($conexao));
    } else {
        $num = @mysqli_num_rows($resultado);
        if ($num == 0) {
            echo "<b>Codigo: </b> Não Localizado!!! <br> <br>";
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
            <!--COLUNA 1-->
            <div class="col-md-5" style="background-color: #EE82EE; color:white">
                <br><br><br><br><br><br><br>
                <div style="position: fixed;" class="ml-3 pl-5 text-center">
                    <h1> Exclusão de Cadastro</h1>
                    <h1> Produto</h1> <br>
                    <i class="fas fa-dolly" style="font-size: 100px;"></i><br><br>
                    <button type="button" class="btn btn-outline-light mt-4 mr-2" value="Voltar" onclick="javascript: location.href='lista_produto.php';" style="border-radius: 25px;">Voltar</button>
                    <!--redireciona para a tela indicada-->
                </div>
            </div>
            <!--COLUNA 2-->
            <div class="col-md-7 p-5 ">
                <h2 class="text-center" style="color: #EE82EE;"> <i class="far fa-copy"></i> Excluir Cadastro </h2>
                <hr class="mb-5">

                <!-- Ele envia os dados para tela de cadastro-->
                <form method="post" action="excluir_produto.php">
                    <!-- 1° linha-->
                    <div class="form-row mb-3">
                        <div class="form-group col-md-2">
                            <label for="exampleInputCodigo">Código</label>
                            <input type="text" class="form-control " name="txtid" value='<?php echo $dado['id']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="xampleInputDescricaoProduto"> Descrição do Produto</label>
                            <input type="text" class="form-control" name="txtdescricao_produto" value='<?php echo $dado['descricao_produto']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="exampleInputMarca"> Marca </label>
                            <input type="text" class="form-control" name="txtmarca" value='<?php echo $dado['marca']; ?>' readonly>
                        </div>
                    </div>

                    <!-- 2° linha-->
                    <div class="form-row mb-3">
                        <div class="form-group col-md-3 mb-3">
                            <label for="quantidade">Quantidade</label>
                            <input type="text" class="form-control" name="txtquantidade" value='<?php echo $dado['quantidade']; ?>' readonly>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="exampleInputValor"> Valor </label>
                            <input type="text" class="form-control" name="txtvalor" value='<?php echo $dado['valor']; ?>' readonly>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="lote">Lote</label>
                            <input type="text" class="form-control" name="txtlote" value='<?php echo $dado['lote']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputData_Validade">Data de Validade</label>
                            <input type="text" class="form-control" name="txtdatavalidade" value='<?php echo $dado['data_validade']; ?>' readonly>
                        </div>
                    </div>
                    <!--3° Linha-->
                    <div class="form-row mb-3">
                        <div class="col-md-12 ">
                            <label for="exampleInput_barras"> Código de Barras </label>
                            <input type="text" class="form-control" name="txtcodigo_barras" value='<?php echo $dado['codigo_barras']; ?>' readonly>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <!--4° Linha-->
                        <div class="col-md-4 ">
                            <label for="exampleInputFornecedor"> Fornecedor </label>
                            <input type="text" class="form-control" name="txtfornecedor" value='<?php echo $dado['fornecedor']; ?>' readonly>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-danger btn-excluir m-2" style="border-radius: 30px;" role="button"> Concluir </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>