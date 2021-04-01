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
            <div class="col-md-5 text-center" style="background-color: #58AF9C; color:white">
                <br><br><br><br><br><br><br>
                <div style="position: fixed;" class="ml-3 pl-5 text-center">
                    <h3> Olá, seja bem vindo!</h3>
                    <h1> Cadastro de Cliente</h1> <br>
                    <i class="fas fa-user-friends" style="font-size: 100px;"></i><br><br>
                    <button type="button" class="btn btn-outline-light mt-4" value="Voltar" onclick="javascript: location.href='index.php';" style="border-radius: 25px;">Voltar</button>
                    <!--redireciona para a tela indicada-->
                </div>
            </div>
            <div class="col-md-7 p-5">
                <h2 class="text-center" style="color: #58AF9C;"> <i class="far fa-copy"></i> Criar Cadastro </h2>
                <hr class="mb-5">
                <form method="post" action="efetuar_cad_cliente.php">
                    <!-- Ele envia os dados para tela de cadastro-->
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="exampleInputNome">Nome</label>
                            <input type="text" class="form-control " name="txtnome" id="exampleInputNome" aria-describedby="nome" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputData_Nasc"> Data de Nascimento </label>
                            <input type="date" class="form-control " name="txtdata_nascimento" id="exampleInputData_Nasc" aria-describedby="data_nasc">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">

                            <label for="combo">Sexo</label>
                            <select class="form-control" name="txtsexo" id="combo">
                                <option value="Feminino">Feminino</option>
                                <option value="Maculino">Maculino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">

                            <label for="combo">Estado Civil</label>
                            <select class="form-control" name="txtestado_civil" id="combo">
                                <option value="Solteiro">Solteiro</option>
                                <option value="Casado">Casado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Viuvo">Viuvo</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputProfissao">Profissão</label>
                            <input type="text" class="form-control " name="txtprofissao" id="exampleInputProfissao" aria-describedby="nome" placeholder="Digite seu nome">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputTelefone">Telefone</label>
                            <input type="text" class="form-control " name="txttelefone" id="exampleInputTelefone" aria-describedby="telefone" placeholder="Digite seu telefone">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail">E-mail</label>
                            <input type="email" class="form-control" name="txtemail" id="exampleInputEmail" aria-describedby="email" placeholder="Digite seu email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputCPF">CPF</label>
                            <input type="text" class="form-control" name="txtcpf" id="exampleInputCPF" aria-describedby="cpf" placeholder="Digite seu CPF">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputRG">RG</label>
                            <input type="text" class="form-control" name="txtrg" id="exampleInputRG" aria-describedby="rg" placeholder="Digite seu RG">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="exampleInputRua">Rua</label>
                            <input type="text" class="form-control" name="txtrua" id="exampleInputRua" aria-describedby="rua" placeholder="Rua">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputNumero">Numero</label>
                            <input type="text" class="form-control" name="txtnumero" id="exampleInputNumero" aria-describedby="numero" placeholder="Numero">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputBairro">Bairro</label>
                            <input type="text" class="form-control" name="txtbairro" id="exampleInputBairro" aria-describedby="bairro" placeholder="Bairro">
                        </div>
                        <div class="form-group col-md-2">

                            <label for="uf">Estado</label>
                            <select class="form-control" name="txtuf">
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS </option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RG">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputCep">CEP</label>
                            <input type="text" class="form-control" name="txtcep" id="exampleInputCEP" aria-describedby="cep" placeholder="Digite seu CEP">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputComplemento">Complemento</label>
                            <input type="text" class="form-control" name="txtcomplemento" id="exampleInputComplemento" aria-describedby="complemento" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputNome">Observação</label>
                            <textarea name="txtobs" cols="30" rows="3" class="form-control" placeholder="Observação"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="btnca" class="btn m-4" style="background-color: #58AF9C; color:white; border-radius: 25px;" value="cadastrar">Cadastrar</button>
                    </div>
                    <!--Submeter via post para a pag efetuar cadastro.php-->
                </form>
            </div>

        </div>

    </div>

    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>