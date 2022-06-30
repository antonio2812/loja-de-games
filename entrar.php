<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/Untitled-1.png" type="image/x-icon">
    <title>ENTRAR</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(19, 22, 119), rgb(53, 139, 238));
        }

        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 18%;
            left: 36%;
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .inputSubmit:hover{
            background-color: deepskyblue;
        }
    </style>
</head>
<body>

<h3><a href="cadastro.php">Voltar</a></h3>

<div>
    <h1>Entrar</h1>
    <form action="testelogin.php" method="POST">
    <input type="text" placeholder="Email">
    <br><br>
    <input type="password" placeholder="Senha">
    <br><br>
    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
</div>

</body>
</html>