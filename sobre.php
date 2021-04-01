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

    <!--SOBRE-->
    <div class="container">
        <section>
            <div class="row mb-5" id="sobre" style="margin-top: 100px;">
                <div class="col-md-12 text-center">
                    <h4> PROGRAMAÇÃO WEB </h4>
                    <hr>
                    <p> Sistema integrado ao phpMyAdmin</p>
                    <p> Composto por três modalidades: cadastro, consultas e relatórios.</p>
                    <p> Dentre os recursos oferecidos, é possivél realizar cadastros, editar e excluir informações.
                    <p>
                </div>
                <!--USUÁRIO-->
                <div class="col-md-3 mt-5">
                    <div class="card card-body mx-1 h-100 text-center card-folha shadow p-5" style="background-color: #6495ED; color:white">
                        <i class="fas fa-user-edit" style="font-size: 100px;"></i><br>
                        <h5>USUÁRIO</h5>

                    </div>
                </div>
                <!--CLIENTE-->
                <div class="col-md-3 mt-5">
                    <div class="card card-body  mx-1 h-100 text-center card-folha shadow p-5" style="background-color: #58AF9C; color:white">
                        <i class="fas fa-user-friends" style="font-size: 100px;"></i><br>
                        <h5>CLIENTE</h5>
                    </div>
                </div>
                <!--PRODUTO-->
                <div class="col-md-3 mt-5">
                    <div class="card card-body mx-1 h-100 text-center card-folha shadow p-5" style="background-color: #EE82EE; color:white">
                        <i class="fas fa-dolly" style="font-size: 100px;"></i><br>
                        <h5>PRODUTO</h5>
                    </div>
                </div>
                <!--FORNECEDOR-->
                <div class="col-md-3  mt-5">
                    <div class="card card-body  mx-1 h-100 text-center card-folha shadow p-5" style="background-color: #9370DB; color:white;">
                        <i class="fas fa-people-carry" style="font-size: 100px;"></i><br>
                        <h5>FORNECEDOR</h5>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <?php include("footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>