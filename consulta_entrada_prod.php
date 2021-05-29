<!-- LISTA DE ITENS VENDIDOS -->
<?php

include("logica-usuario.php");
verificaUsuario();

include("conexao.php");

$id_venda = $_GET['id_venda'];
// fazendo select para mostrar a descrição do produto, preço, quantidade 
$consulta = " SELECT produto.descricao_produto, itens_entrada.preco, itens_entrada.quantidade FROM itens_entrada, produto where itens_entrada.id_entrada = $id_venda and produto.id = itens_entrada.id_produto";
$con = @mysqli_query($conexao, $consulta) or die($mysqli->error);

//fazendo select para exibição do total da venda
$preco = "SELECT sum(preco * quantidade) as total FROM itens_entrada where id_entrada = $id_venda";
$con_preco = @mysqli_query($conexao, $preco) or die($mysqli->error);
$total = mysqli_fetch_array($con_preco);

// selecionado o cliente
$select_entrada = "select entrada.id_fornecedor, fornecedor.razao_social from entrada, fornecedor where entrada.id =$id_venda and entrada.id_fornecedor=fornecedor.id";
$cliente = @mysqli_query($conexao, $select_entrada) or die($mysqli->error);
$dado_cli = mysqli_fetch_array($cliente);

?>


<!DOCTYPE html>
<html lang="br">

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>

<body>
    <?php include("header.php") ?>

    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-md-12 mt-4">

                <!--Inicio Pesquisar-->
                <div class=" text-center mt-5 mb-2 mr-2">
                    <h2 class="ml-2" style="color: #32CD32;"> <i class="fas fa-shopping-cart"></i> Consulte de entrada de produto </h2>
                </div>
                <!--Fim dos botões-->
                <div class="d-flex justify-content-between mt-5 mb-2 mr-2">
                    <div class="form-row col-md-6">
                        <div class="form-group col-md-2">
                            <label for="exampleInputCodigo">Código</label>
                            <input type="text" class="form-control" name="txtcodigo" value='<?php echo $dado_cli['id_fornecedor']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-7">
                            <label for="exampleInputNome">Nome do Cliente</label>
                            <input type="text" class="form-control" name="txtdesc" value='<?php echo $dado_cli['razao_social']; ?>' readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputTotal">Total</label>
                            <input type="number" class="form-control" name="txttotal" value='<?php echo bcdiv($total['total'], 1,2); ?>' readonly>
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        <a href="entrada_prod.php" class="btn " role="button" style="background-color :#32CD32; color:white; border-radius: 30px;"> Voltar </a>
                    </div>

                </div>

                <!--Inicio da Tabela-->
                <table class="table table-borderless table-responsive-md table-hover">
                    <thead>
                        <tr style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0; color: #4F4F4F">
                            <th>PRODUTO</th>
                            <th>PREÇO</th>
                            <th>QUANTIDADE</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>

               <!--Estrutura de repetição, que vai executar de acordo com a quantidade de registros armazenados no fetch_array-->
                    <?php while ($dados = $con->fetch_array()) { ?>
                        <!--Organiza os dados em formato de array-->
                        <tbody>
                            <tr style="border-top: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0; color: #4F4F4F">
                                <!--ele localiza pela nome da variavél-->
                                <td><?php echo $dados['descricao_produto']; ?></td>
                                <td><?php echo $dados['preco']; ?></td>
                                <td><?php echo $dados['quantidade']; ?></td>  
                                <td><?php echo bcdiv($dados['preco'] * $dados['quantidade'], 1,2); ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <!--Fim da Tabela-->
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>