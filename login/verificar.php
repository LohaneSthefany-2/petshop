<?php

session_start();

include "conexao.php";

$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);

$sql = "SELECT * FROM usuarios WHERE email = :email";

$stmt = $conn->prepare($sql);

$stmt->execute([
    ':email' => $email
]);

$usuario = $stmt->fetch();

if($usuario && password_verify($senha, $usuario['senha'])){

    $_SESSION['usuario'] = $usuario['nome'];

    header("Location: ../dashboard.php");
    exit();

}else{

    header("Location: index.php?erro=1");
    exit();

}

?>