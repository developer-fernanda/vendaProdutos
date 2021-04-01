<?php

include("conexao.php"); //chama o arquivo conexao php

//recebendo os dados
$descricao_produto = $_POST['txtdescricao_produto'];
$marca = $_POST['txtmarca'];
$quantidade = $_POST['txtquantidade'];
$valor = $_POST['txtvalor'];
$lote = $_POST['txtlote'];
$data_validade = $_POST['txtdatavalidade'];
$codigo_barras = $_POST['txtcodigo_barras'];
$fornecedor = $_POST['txtfornecedor'];

//essa variavél recebe o comando de inserção
$sqlinsert = "insert into produto values (0, '$descricao_produto', '$marca', '$quantidade', '$valor', '$lote', '$data_validade', '$codigo_barras', '$fornecedor')";

//executando instrução no SQL
//@mysqli_query é um comando que exige dois parametros (conecta ao banco / insere, deleta, consulta e atualiza a informação)
$resultado = @mysqli_query($conexao, $sqlinsert);

?>
<!--Fecha o arquivo php, pois está sendo utilizado outras instruções-->

<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>

<body>
  <?php include("header.php") ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center" style="margin-top: 100px">

        <?php
        if (!$resultado) {
          //Esse comando só é executado quando não é possivel inserir a informação no banco   
          die('Query Inválido: ' . @mysqli_error($conexao));
        } else {
          include("header.php");
          echo '<div class="alert alert-success" role="alert">
            <div class="p-5">
              <i class="fas fa-grin-hearts h1"> </i> 
              <p> Parabéns! Registro Cadastrado com Sucesso.</p>
            </div>
          </div>

      <a href="cad_produto.php" class="btn mx-4 mt-5" style="background-color: #EE82EE; color:white; border-radius: 25px;">Criar novo Cadastro</a>
      <a href="lista_produto.php" class="btn mt-5" style="background-color: #EE82EE; color:white; border-radius: 25px;">Ver Cadastrados</a>';
        }
        mysqli_close($conexao); //Fecha a conexão com o banco

        ?>
      </div>
    </div>
  </div>

</body>

</html>