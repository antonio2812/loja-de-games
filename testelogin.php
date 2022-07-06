<?php
session_start();
//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //Acessa
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('Email: ' . $email);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);

    $sql = $conexao->query('select id,nome_completo,email,senha,telefone,data_nascimento,cidade,estado,endereco from usuarios where email = "'.$email.'" and senha = md5("'.$senha.'")');

    $result = $conexao->query($sql);

    //print_r($sql);
    //print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: cadastrar.php');
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
}
else
{
    //Nao acessa
    header('Location: cadastrar.php');
}
?>