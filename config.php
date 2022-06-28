<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'projeto_php';     //Colocar o nome no banco de dados

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

/*if($conexao->connect_errno){
    echo "Erro";
}
else{
    echo "Conexão efetuada com sucesso";
}
*/

?>