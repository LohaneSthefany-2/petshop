<?php

require("login/seguranca.php");

?>

<!DOCTYPE html>
<html pt="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrou no sistema!</title>
</head>
<body>

    <h1>Oii <?php echo $_SESSION["usuario"]; ?>, seja bem vindo(a) de volta!</h1>

    <a href="pets/listar.php">Pets</a> <br>
    <a href="clientes/listar.php">Clientes</a> <br>
    <a href="consultas/listar.php">Consultas</a> <br>
    <a href="login/logout.php">Sair</a>

</body>
</html>