<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/Untitled-1.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Cadastro</title>
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
</head>
<body>
<h3><a href="cadastro.php">Voltar</a></h3>

<div>
    <h1>Entrar</h1>
    <form action="sistema.php" method="POST">
    <input type="text" name="email" placeholder="Email">
    <br><br>
    <input type="password" name="senha" placeholder="Senha">
    <br><br>
    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
</div>
	<?php
		require('conexao.php');
        $nome_completo = $_POST['nome_completo'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
		try{	
			$insert = 'insert into usuarios (nome_completo,email,senha,telefone,data_nascimento,cidade,estado,endereco) values ("'.$nome_completo.'","'.$email.'",md5("'.$senha.'"),"'.$telefone.'","'.$data_nascimento.'","'.$cidade.'","'.$estado.'","'.$endereco.'")';
		
			$cadastrar = $conexao -> prepare($insert);
			$cadastrar -> execute();
		
		
			echo "<main><p>Cadastro efetuado com sucesso!</p></main>";	
		}
		catch(Exception $e){
			echo 'Erro: ',  $e->getMessage(), "\n";
		}
	?>
</body>
</html>