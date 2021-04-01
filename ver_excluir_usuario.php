<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
    <?php
    include_once('conexao.php');

    //RECUPERAÇÃO
    $codigo = $_GET['codigo'];

    //CRIANDO A LINHA DO SELECT
    $sqlconsulta = "select * from usuario where id = '$codigo'";

    //EXECUTANDO INSTRUÇÃO
    $resultado = @mysqli_query($conexao, $sqlconsulta);
    if (!$resultado) {
        echo '<input type="button" onclick="window.location' . "'index.php'" . ';" value="voltar"<br><br>';
        die('<b> Query Invalida: </b>' . @mysqli_error($conexao));
    } else {
        $num = @mysqli_num_rows($resultado);
        if ($num == 0) {
            echo "<b>Codigo: </b> Não Localizado!!! <br> <br>";
            echo '<input type="button" onclick="window.location=' . "'index.php'" . ';" value="voltar"<br><br>';
            exit;
        } else {
            $dado = mysqli_fetch_array($resultado);
        }
    }
    mysqli_close($conexao);
    ?>
    <?php include("header.php") ?>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-5" style="background-color: #6495ED; color:white">
                <br><br><br><br><br><br><br>
                <div style="position: fixed;" class="ml-3 pl-5 text-center">
                    <h1> Exclusão de Cadastro</h1>
                    <h1> Usuário </h1> <br>
                    <i class="fas fa-user-edit" style="font-size: 100px;"></i><br><br>
                    <button type="button" class="btn btn-outline-light mt-4 mb-5 mr-2" value="Voltar" onclick="javascript: location.href='lista_usuario.php';" style="border-radius: 25px;">Voltar</button>
                    <!--redireciona para a tela indicada-->
                </div>
            </div>

            <div class="col-md-7 p-5">
                <h2 class="text-center" style="color: #6495ED;"> <i class="far fa-copy"></i> Excluir Cadastro </h2>
                <hr class="mb-5">
                <form method="post" action="excluir_usuario.php">
                    <!-- Ele envia os dados para tela de cadastro-->
                    <div class="form-row">
                        <div class="form-group col-md-2 mb-3">
                            <label for="exampleInputCodigo">Código</label>
                            <input type="text" class="form-control " name="txtid" value='<?php echo $dado['id']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-10 mb-3">
                            <label for="exampleInputUsuario">Usuário</label>
                            <input type="text" class="form-control " name="txtnome" value='<?php echo $dado['nome']; ?>' readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail">E-mail</label>
                            <input type="text" class="form-control" name="txtemail" value='<?php echo $dado['email']; ?>' readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword">Senha</label>
                            <input type="password" class="form-control" name="txtsenha" value='<?php echo $dado['senha']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="combo">Perfil</label>
                            <input type="text" class="form-control" name="txtperfil" id="combo" value='<?php echo $dado['perfil']; ?>' readonly>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-danger btn-excluir m-2" style="border-radius: 30px;" role="button"> Concluir </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>