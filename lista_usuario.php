<?php

include("conexao.php");
$consulta = "SELECT * FROM usuario";

//Verifica se o formulário foi submetido
if (isset($_GET['txtpesquisar'])) {
    $pesquisa = $_GET['txtpesquisar'];
    $consulta = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%' ";
}


$con = @mysqli_query($conexao, $consulta) or die($mysql->error);

?>


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
    <?php include("header.php") ?>
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-md-12 mt-4">

                <!--Inicio dos botões-->
                <form method="get" action="lista_usuario.php">
                    <div class="d-flex justify-content-between mt-5 mb-2 mr-2">
                        <div>
                            <h2 class="ml-2" style="color: #6495ED;"> <i class="far fa-copy"></i> Consulta de Usuários </h2>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <input type="text" class="form-control" name="txtpesquisar" id="exampleInputPesquisar" aria-describedby="pesquisa" placeholder="Pesquisa" style="width: 350px; border-radius: 30px;">
                            </li>
                            <li class="list-inline-item">
                                <button type="submit" class="btn" style="background-color: #6495ED; color:white; border-radius: 30px;"><i class="fas fa-search"></i> Pesquisar</button>
                            </li>
                            <li class="list-inline-item">
                                <a href="cad_usuario.php" class="btn btn-secondary " style="border-radius: 30px;"> <i class="fas fa-plus"></i> Novo</a>
                            </li>
                        </ul>
                    </div>
                    <!--Fim dos botões-->
                </form>
                <!--Inicio da Tabela-->
                <table class="table table-striped table-hover">
                    <thead>
                         <!--ele localiza pela nome da variavél-->
                        <tr style="background: #6495ED; color:white">
                            <th>CÓDIGO</th>
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>SENHA</th>
                            <th>PERFIL</th>
                            <th>AÇÃO</th>
                        </tr>
                    </thead>

                    <?php while ($dado = $con->fetch_array()) { ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $dado['id']; ?> </td>
                                <td> <?php echo $dado['nome']; ?> </td>
                                <td> <?php echo $dado['email']; ?> </td>
                                <td> <?php echo $dado['senha']; ?> </td>
                                <td> <?php echo $dado['perfil']; ?> </td>
                                <td>
                                    <a href="ver_cad_usuario.php?codigo=<?php echo $dado['id']; ?>" class="btn btn-sm btn-alterar mx-2" style="background-color: #6495ED; color:white; border-radius: 30px;" role="button">
                                        <i class="fas fa-pencil-alt"></i> Alterar </a>

                                    <a href="ver_excluir_usuario.php?codigo=<?php echo $dado['id']; ?>" class="btn btn-sm btn-danger btn-excluir" style="border-radius: 30px;" role="button">
                                        <i class="far fa-trash-alt"></i> Excluir </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <!--Fim da Tabela-->
                </table>

            </div>
        </div>
    </div>

    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<!-- class="table table-bordered" - Bordas
class="table-primary" - Aplicar cores
Class="table table-hover" - Destaque ao passar o mouse 
Class="table table-striped" - Linhas artenadas -->