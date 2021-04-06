<?php

include("conexao.php");
include("banco-usuario.php");
include("logica-usuario.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container-fluid" id="background">

        <section id="login">

            <h1>Acesso ao Sistema</h1>
            <p> Cadastro, consulta e relatórios</p>

            <form name="frmlogin" method="post">

                <label for="user"> Usuário </label>
                <input type="text" class="form-control" name="usuario" placeholder="Seu usuário">

                <label for="pass" class="mt-3"> Senha </label>
                <input type="password" class="form-control" name="senha" placeholder="Sua senha">

                <div class="align-button">
                    <button class="btn-login" type="submit" value="entrar">Entrar</button>
                    <button class="btn-login" type="reset" value="limpar">Limpar</button>
                </div>
            </form>

            <!-- <a href="" class="forget"> Esqueceu sua senha? </a> -->

            <?php

            if ($_POST) {
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];

                // 1 PASSO VERIFICAR SE O USUARIO EXISTE
                if (efetuaLogin($conexao, $usuario, $senha)) {
                    logaUsuario($usuario);
                    header("Location: index.php");
                } else {
                    $usuario = $_POST['usuario'];
                    echo "<label class='alert alert-danger'>
                            <b>Usuário ou Senha Incorreta!<b>
                          </label>";
                }
            }
            ?>
            </form>
        </section>

    </div>

</body>

</html>