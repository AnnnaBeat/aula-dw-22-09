<?php
// require_once "../verifica_sessao.php";
//pegar as variáveis
$nome = $_POST['nome'];
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO usuario (nome, username, email, senha) VALUES ('$nome', '$username', '$email', '$senha');";

 
//executa SQL
require_once "../conexao.php";
mysqli_query($conexao, $sql);


//desvia a navegação
header("Location: ../sucesso.html");