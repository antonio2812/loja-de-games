<?php

if(isset($_POST['submit']))
{
    //print_r('Nome: ' . $_POST['nome_completo']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);

    include_once('config.php');

    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome_completo,email,senha,telefone,data_nascimento,cidade,estado,endereco) VALUES ('.$nome_completo.','.$email.',md5('.$senha.'),md5('.$telefone.'),'.$data_nascimento.','.$cidade.','.$estado.',md5('.$endereco.')");

    header('Location: entrar.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/Untitled-1.png" type="image/x-icon">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(29, 29, 29), rgb(29, 29, 29));
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding-top: 25px;
            padding-bottom: 20px;
            padding-right: 70px;
            padding-left: 70px;
            border-radius: 15px;
            width: 25%;
            color: white;
        }

        fieldset{
            border: 3px solid dodgerblue;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 4px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            outline: none;
            border-bottom: 1px solid white;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelinput{
            position: absolute;
            font-size: 12px;
            left: 0px;
            bottom: 26.9px;
        }

        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }

        #submit{
            background-color: dodgerblue;
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: white;
            cursor: pointer;
        }

        #submit:hover{
        background-color: deepskyblue;
        }
        a{
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: rgb(24, 139, 233);
        }
    </style>
    <title>Cadastro</title>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="JavaScript/mask.js"></script>

</head>
<body>

<h3><a href="index.php">Voltar</a></h3>

<div class="box">
    <form action="cadastro.php" method="POST">
        <fieldset>
            <legend><b>Formulário de Clientes</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome_completo" id="nome_completo" class="inputUser" required>
                <label for="nome_completo" class="labelinput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelinput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelinput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelinput">Telefone</label>
            </div>
            <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelinput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelinput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelinput">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>
</div>

</body>
</html>