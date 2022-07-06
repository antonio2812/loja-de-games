<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/Untitled-1.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Cadastrar</title>
</head>
<body>
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
		
		
			echo "<main><p>Cadastro efetuado com sucesso!</p><main>";	
		}
		catch(Exception $e){
			echo 'Erro: ',  $e->getMessage(), "\n";
		}
        header("Location: entrar.php");
	?>
</body>
</html>