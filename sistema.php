<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: entrar.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        body{
            background-image: linear-gradient(45deg, rgb(19, 22, 119), rgb(53, 139, 238));
            color: white;
            text-align: center;
        }
        nav{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(29, 29, 29);
            padding: 2%;
        }
        h6{
            position: absolute;
            top: 3%;
            right: 0.9;
        }
        div{
            position: absolute;
            left: 94.3%;
            bottom: 92%;
            padding: 0.5%;
        }
    </style>
</head>
<body>
    <nav>
        <h6>SISTEMA DO USUÁRIO</h6>
        <div class="d-flex">
             <a href="sair.php" class="btn btn-danger" me-5>Sair</a>
        </div>
    </nav>
    <br>
    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
</body>
</html>