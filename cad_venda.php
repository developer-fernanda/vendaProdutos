<!-- CADASTRO DE VENDA -->

<?php

include ("conexao.php");

$nome=$_POST['txtcliente'];
$obs=$_POST['txtobs'];

// criar string de insert
$sqlinsert="insert  into vendas values (0, '$nome', now(), '$obs')";

// criar variavel criando query
$resultado=@mysqli_query($conexao, $sqlinsert);

// verificação de erro sql
if (!$resultado) {
    die('Query Inválida: ' . @mysqli_error($conexao));  
} else {
    header('Location:venda_prod.php');
    
} 

//fechando a conexao
mysqli_close($conexao);

?>