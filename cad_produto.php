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
        <div class="row mt-5">
         <!--COLUNA 1-->
            <div class="col-md-5" style="background-color: #EE82EE; color:white">
                <br><br><br><br><br><br><br>
                <div style="position: fixed;" class="ml-3 pl-5 text-center">
                    <h3> Olá, seja bem vindo!</h3>
                    <h1> Cadastro de Produto</h1> <br>
                    <i class="fas fa-dolly" style="font-size: 100px;"></i><br><br>
                    <button type="button" class="btn btn-outline-light mt-4 mr-2" value="Voltar" onclick="javascript: location.href='index.php';" style="border-radius: 25px;"> Voltar</button>
                    <!--redireciona para a tela indicada-->
                </div>
            </div>
             <!--COLUNA 2-->
            <div class="col-md-7 p-5 ">
                <h2 class="text-center" style="color: #EE82EE;"> <i class="far fa-copy"></i> Criar Cadastro </h2>
                <hr class="mb-5">
                <!-- Ele envia os dados para tela de cadastro-->
                <form method="post" action="efetuar_cad_produto.php">
                    <!-- 1° linha-->
                    <div class="form-row">
                        <div class="col-md-7 mb-3">
                            <label for="xampleInputDescricaoProduto"> Descrição do Produto</label>
                            <input type="text" class="form-control" name="txtdescricao_produto" id="exampleInputDescricaoProduto" aria-describedby="produto" placeholder="Nome do produto">
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="exampleInputMarca"> Marca </label>
                            <input type="text" class="form-control" name="txtmarca" id="exampleInputMarca" aria-describedby="marca" placeholder="Digite a marca do produto">
                        </div>
                    </div>

                    <!-- 2° linha-->
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="quantidade">Quantidade</label>
                            <select class="form-control" name="txtquantidade" id="quantidade">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="exampleInputValor"> Valor </label>
                            <input type="text" class="form-control" name="txtvalor" id="exampleInputValor" aria-describedby="preco" placeholder="Digite o Valor">
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="lote">Lote</label>
                            <select class="form-control" name="txtlote" id="lote">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="exampleInputData_Validade">Data de Validade</label>
                            <input type="date" class="form-control" name="txtdatavalidade" id="exampleInputData_Validade" aria-describedby="data_validade">
                        </div>
                    </div>

                    <!--3° Linha-->
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="exampleInput_barras"> Código de Barras </label>
                            <input type="text" class="form-control" name="txtcodigo_barras" id="exampleInputCodigo_barras" aria-describedby="codigo_barras" placeholder="Digite o número do código de barras">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="exampleInputFornecedor"> Fornecedor </label>
                            <select class="form-control" name="txtfornecedor" id="fornecedor">
                                <option value="1">Atacadão</option>
                                <option value="2">Extra</option>
                                <option value="3">Mercado São Roque</option>
                                <option value="4">Mercado Vargem Grande</option>
                                <option value="5">Carrefuor</option>
                            </select>
                            <!-- <input type="text" class="form-control" name="txtFornecedor" id="exampleInputFornecedor" aria-describedby="fornecedor" placeholder="Digite o nome do fornecedor"> -->
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="btnca" class="btn m-4" style="background-color: #EE82EE; color:white; border-radius: 25px;" value="cadastrar">Cadastrar</button>
                        <!--Submeter via post para a pag efetuar cadastro.php-->
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