<?php
session_start();
include_once("conexão.php");

$nome = filter_input(INPUT_POST, 'Nome', FILTER_DEFAULT);
$sobrenome = filter_input(INPUT_POST, 'Sobrenome',  FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'Email',  FILTER_DEFAULT);
$mensagem = filter_input(INPUT_POST, 'mensagem',  FILTER_DEFAULT);


echo "Nome: $nome <br>";
echo "Sobrenome: $sobrenome <br>";
echo "Email: $email <br>";
echo "mensagem: $mensagem <br>";

$result_usuario = "INSERT INTO usuários (Nome, Sobrenome, Email, Mensagem) VALUES ('$nome', '$sobrenome', '$email', '$mensagem')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg']= "<p style=' color: green;'> Usuário cadastrado com sucesso! </p>";
    header("Location: index.php");
}else{
    $_SESSION['msg']= "<p style=' color: red;'> Usuário não foi cadastrado com sucesso! </p>";
    header("Location: index.php");
}

?>