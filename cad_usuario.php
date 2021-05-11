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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">


</head>

<body>
    <?php include("header.php") ?>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-5" style="background-color: #6495ED; color:white">
                <br><br><br><br><br><br><br>
                <!--1 COLUNA-->
                <div style="position: fixed;" class="ml-3 sm-12 pl-5 text-center">
                    <h3> Olá, seja bem vindo!</h3>
                    <h1> Cadastro de Usuário</h1> <br>
                    <i class="fas fa-user-edit" style="font-size: 100px;"></i><br><br>
                    <button type="button" class="btn btn-outline-light mt-4 mr-2" value="Voltar" onclick="javascript: location.href='index.php';" style="border-radius: 25px;"> Voltar</button>
                    <!--redireciona para a tela indicada-->
                </div>
            </div>
            <!--2 COLUNA-->
            <div class="col-md-7 p-5">
                <h2 class="text-center" style="color: #6495ED;"> <i class="far fa-copy"></i> Criar Cadastro </h2>
                <hr class="mb-5">
                <form method="post" action="efetuar_cad_usuario.php" style="margin-left: 90px;">
                    <!-- Ele envia os dados para tela de cadastro-->
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="exampleInputUsuario">Usuário</label>
                            <input type="text" class="form-control " name="txtnome" id="exampleInputUsuario" aria-describedby="usuario" placeholder="Digite seu usuário">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="exampleInputEmail">E-mail</label>
                            <input type="email" class="form-control" name="txtemail" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Digite seu email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="exampleInputPassword">Senha</label>
                            <input type="password" class="form-control" name="txtsenha" id="exampleInputPassword" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="combo">Perfil</label>
                            <select class="form-control" name="txtperfil" id="combo">
                                <option value="Administrador">Administrador</option>
                                <option value="Usuario">Usuário</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="btnca" class="btn m-4 text-center" style="background-color: #6495ED; color:white; border-radius: 25px;" value="cadastrar">Cadastrar</button>
                    </div>
                    <!--Submeter via post para a pag efetuar cadastro.php-->
                </form>
            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>