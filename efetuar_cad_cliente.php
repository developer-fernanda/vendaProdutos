<?php

include("conexao.php"); //chama o arquivo conexao php

//recebendo os dados
$nome = $_POST['txtnome'];
$data_nascimento = $_POST['txtdata_nascimento'];
$sexo = $_POST['txtsexo'];
$estado_civil = $_POST['txtestado_civil'];
$profissao = $_POST['txtprofissao'];
$telefone = $_POST['txttelefone'];
$email = $_POST['txtemail'];
$cpf = $_POST['txtcpf'];
$rg = $_POST['txtrg'];
$rua = $_POST['txtrua'];
$numero = $_POST['txtnumero'];
$bairro = $_POST['txtbairro'];
$uf = $_POST['txtuf'];
$CEP = $_POST['txtcep'];
$complemento = $_POST['txtcomplemento'];
$observacoes = $_POST['txtobs'];

//essa variavél recebe o comando de inserção
$sqlinsert = "insert into cliente values (0, '$nome', '$data_nascimento', '$sexo', '$estado_civil', '$profissao',
 '$telefone', '$email', '$cpf','$rg', '$rua', '$numero', '$bairro', '$uf','$CEP', '$complemento', now(), '$observacoes')";

//executando instrução no SQL
//@mysqli_query é um comando que exige dois parametros (conecta ao banco / insere, deleta, consulta e atualiza a informação)
$resultado = @mysqli_query($conexao, $sqlinsert);


if (!$resultado) {
  //Esse comando só é executado quando não é possivel inserir a informação no banco   
  die('Query Inválido: ' . @mysqli_error($conexao));
} else {
  echo "Parabéns! Registro Cadastrado com Sucesso";
}
mysqli_close($conexao); //Fecha a conexão com o banco

?>
<!--Fecha o arquivo php, pois está sendo utilizado outras instruções-->

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

  <button type="submit" class="btn mx-2" style="background-color: #58AF9C; color:white; border-radius: 25px;" onclick="window.location='cad_cliente.php';" value="Cadastro">Voltar para Cadastro</button>

  <button type="submit" class="btn" style="background-color: #58AF9C; color:white; border-radius: 25px;" onclick="window.location='lista_cliente.php';" value="consulta">Consultar Cadastrado Realizado</button>

</body>

</html>