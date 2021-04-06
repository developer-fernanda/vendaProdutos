<?php

session_start();

function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){

        //echo "Vc nao esta logado!";
        header("Location:erro.php");
    die();
    }
}

function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
    return $_SESSION["usuario_logado"];
}

function logout(){
    session_destroy();
}