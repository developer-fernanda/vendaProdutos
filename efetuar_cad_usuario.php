<?php

include("conexao.php"); //chama o arquivo conexao php

//recebendo os dados
$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$perfil = $_POST['txtperfil'];

//essa variavél recebe o comando de inserção
$sqlinsert = "insert into usuario values (0, '$nome', '$email', '$senha', '$perfil')";

//executando instrução no SQL
//@mysqli_query é um comando que exige dois parametros (conecta ao banco / insere, deleta, consulta e atualiza a informação)
$resultado = @mysqli_query($conexao, $sqlinsert);


?>
<!--Fecha o arquivo php, pois está sendo utilizado outras instruções-->

<br><br>
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

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center" style="margin-top: 100px">

        <?php

        if (!$resultado) {
          //Esse comando só é executado quando não é possivel inserir a informação no banco   
          die('Query Inválido: ' . @mysqli_error($conexao));
        } else {
          include("header.php");
          echo '<div class="alert alert-success" role="alert">
             <div class="p-5">
                <i class="fas fa-grin-hearts h1"> </i> 
                 <p> Parabéns! Registro Cadastrado com Sucesso.</p>
             </div>
          </div>

          <a href="cad_usuario.php" class="btn mx-4 mt-5" style="background-color: #6495ED; color:white; border-radius: 25px;">Criar novo Cadastro</a>
          <a href="lista_usuario.php" class="btn mt-5" style="background-color: #6495ED; color:white; border-radius: 25px;">Ver Cadastros</a>
         ';
        }
        mysqli_close($conexao); //Fecha a conexão com o banco

        ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>