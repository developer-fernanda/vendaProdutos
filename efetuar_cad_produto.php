

<?php

include("conexao.php"); //chama o arquivo conexao php

//recebendo os dados
$descricao_produto = $_POST['txtdescricao_produto'];
$marca = $_POST['txtmarca'];
$quantidade = $_POST['txtquantidade'];
$valor = $_POST['txtvalor'];
$lote = $_POST['txtlote'];
$data_validade = $_POST['txtdatavalidade'];
$codigo = $_POST['txtcodigo'];
$fornecedor = $_POST['txtfornecedor'];

//essa variavél recebe o comando de inserção
$sqlinsert = "insert into produto values (0, '$descricao_produto', '$marca', '$quantidade', '$valor', '$lote', '$data_validade', '$codigo', '$fornecedor')"; 

//executando instrução no SQL
//@mysqli_query é um comando que exige dois parametros (conecta ao banco / insere, deleta, consulta e atualiza a informação)
$resultado = @mysqli_query($conexao, $sqlinsert);


if (!$resultado){ 
  //Esse comando só é executado quando não é possivel inserir a informação no banco   
  die('Query Inválido: ' . @mysqli_error($conexao));  
} else {
    echo "Parabéns! Registro Cadastrado com Sucesso!";
}
mysqli_close($conexao); //Fecha a conexão com o banco

?> <!--Fecha o arquivo php, pois está sendo utilizado outras instruções-->

<br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<button type="submit" class="btn mx-2" style="background-color: #EE82EE; color:white; border-radius: 25px;" onclick="window.location='cad_produto.php';" value="Cadastro">Voltar para Cadastro</button>

<button type="submit" class="btn" style="background-color: #EE82EE; color:white; border-radius: 25px;" onclick="window.location='lista_produto.php';" value="consulta">Consultar Cadastrado Realizado</button>

</body>

</html>