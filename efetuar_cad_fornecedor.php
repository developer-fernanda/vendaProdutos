<?php

include("conexao.php"); //chama o arquivo conexao php

//recebendo os dados
$razao_social = $_POST['txtRazaoSocial'];
$cnpj = $_POST['txtCnpj'];
$data_abertura = $_POST['txtdataabertura'];
$regime = $_POST['txtregime'];
$tipo = $_POST['txttipo'];
$inscricao_estadual = $_POST ['txtinscricao_estadual'];
$inscricao_municial = $_POST ['txtinscricao_municipal'];
$representante = $_POST ['txtrepresentante'];
$telefone = $_POST ['txttelefone'];
$celular = $_POST['txtcelular'];
$email = $_POST['txtemail'];
$rua = $_POST['txtrua'];
$numero = $_POST['txtnumero'];
$bairro = $_POST['txtbairro'];
$UF = $_POST['txtuf'];
$CEP = $_POST['txtcep'];
$complemento = $_POST['txtcomplemento'];
$site = $_POST['txtsite'];
$email_cobranca = $_POST['txtemail_cobranca'];
$observacoes = $_POST['txtobs'];

//essa variavél recebe o comando de inserção
$sqlinsert = "insert into fornecedor values (0, '$razao_social', '$cnpj', '$data_abertura', '$regime', '$tipo', '$inscricao_estadual', '$inscricao_municial', '$representante', '$telefone', '$celular', '$email', '$rua', '$numero', '$bairro', '$UF','$CEP', '$complemento', '$site', '$email_cobranca', '$observacoes')"; 


//executando instrução no SQL
//@mysqli_query é um comando que exige dois parametros (conecta ao banco / insere, deleta, consulta e atualiza a informação)
$resultado = @mysqli_query($conexao, $sqlinsert);


if (!$resultado){ 
  //Esse comando só é executado quando não é possivel inserir a informação no banco   
  die('Query Inválido: ' . @mysqli_error($conexao));  
} else {
    echo "Registro Cadastrado com Sucesso";
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

<button type="submit" class="btn mx-2" style="background-color: #9370DB; color:white; border-radius: 25px;" onclick="window.location='cad_fornecedor.php';" value="Cadastro">Voltar para Cadastro</button>

<button type="submit" class="btn" style="background-color: #9370DB; color:white; border-radius: 25px;" onclick="window.location='lista_fornecedor.php';" value="consulta">Consultar Cadastrado Realizado</button>

</body>

</html>