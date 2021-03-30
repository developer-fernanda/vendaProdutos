<?php

include("conexao.php");
$consulta = "SELECT * FROM cliente";

//Verifica se o formulário foi submetido
if (isset($_GET['txtpesquisa'])) {
    $pesquisa = $_GET['txtpesquisa'];
    $consulta = "SELECT * FROM cliente WHERE nome LIKE '%$pesquisa%' ";
}

// echo $consulta;
$con = @mysqli_query($conexao, $consulta) or die($mysql->error);
// var_dump($con->fetch_array());
// exit;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
    <?php include("header.php") ?>
    <div class="container-fluid">
        <div class="row m-5 ">

            <div class="col-md-12 mt-4">
                <!--Inicio dos botões-->
                <form method="get" action="lista_cliente.php">
                    <div class="d-flex justify-content-between mt-5 mb-2 mr-2">
                        <div>
                            <h2 class="ml-2" style="color: #58AF9C;"> <i class="far fa-copy"></i> Consulta de Cliente </h2>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <input type="text" class="form-control" name="txtpesquisa" id="exampleInputPesquisar" aria-describedby="pesquisa" placeholder="Pesquisa" style="width: 350px; border-radius: 30px;">
                            </li>
                            <li class="list-inline-item">
                                <button type="submit" class="btn" style="background-color: #58AF9C; color:white; border-radius: 30px;"><i class="fas fa-search"></i> Pesquisar</button>
                            </li>
                            <li class="list-inline-item">
                                <a href="cad_cliente.php" class="btn btn-secondary" style=" border-radius: 30px;"> <i class="fas fa-plus"></i> Novo</a>
                            </li>
                        </ul>
                    </div>
                </form>
                <!--Fim dos botões-->
            </div> 
            <div class="col-md-12">
                <!--Inicio da Tabela-->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr style="background: #58AF9C; color:white">
                            <th>CÓDIGO</th>
                            <th>NOME</th>
                            <th>TELEFONE</th>
                            <th>E-MAIL</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>AÇÃO</th>
                        </tr>
                    </thead>
                    <!--Estrutura de repetição, que vai executar de acordo com a quantidade de registros armazenados no fetch_array-->
                    <?php while ($dado = $con->fetch_array()) { ?>
                        <!--Organiza os dados em formato de array-->
                        <tbody>
                            <tr>
                                <!--ele localiza pela nome da variavél-->
                                <td> <?php echo $dado['id']; ?> </td>
                                <td> <?php echo $dado['nome']; ?> </td>
                                <td> <?php echo $dado['telefone']; ?> </td>
                                <td> <?php echo $dado['email']; ?> </td>
                                <td> <?php echo $dado['cpf']; ?> </td>
                                <td> <?php echo $dado['rg']; ?> </td>
                                <td class="d-flex">
                                    <a href="ver_cad_cliente.php?codigo=<?php echo $dado['id']; ?>" class="btn btn-alterar btn-sm mx-2" style="background-color: #58AF9C; color:white;  border-radius: 30px;" role="button">
                                        <i class="fas fa-pencil-alt"></i> Alterar </a>

                                    <a href="excluir_cliente.php?codigo=<?php echo $dado['id']; ?>" class="btn btn-danger btn-sm  btn-excluir" style=" border-radius: 30px;" role="button">
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