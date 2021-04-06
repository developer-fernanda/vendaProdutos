<?php

//FUNCAO PARA EFETUARLOGIN

function efetuaLogin($conexao, $email, $senha){
    $query = "select * from usuario where email='{$email}' and senha='{$senha}'";

    $resultado = mysqli_query($conexao, $query);

$usuariologado = mysqli_fetch_assoc($resultado);

return $usuariologado;

}