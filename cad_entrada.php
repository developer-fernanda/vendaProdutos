<!-- CADASTRO DE VENDA -->

<?php

include ("conexao.php");

$nome=$_POST['txtrazao_social'];
$obs=$_POST['txtobservacoes'];

// criar string de insert
$sqlinsert="insert into entrada values (0, '$nome', now(), '$obs')";

// criar variavel criando query
$resultado=@mysqli_query($conexao, $sqlinsert);

// verificação de erro sql
if (!$resultado) {
    die('Query Inválida: ' . @mysqli_error($conexao));  
} else {
    header('Location:entrada_prod.php');
    
} 

//fechando a conexao
mysqli_close($conexao);

?>