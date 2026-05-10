<?php
require("../login/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO pets (nomepet, dono, tipo)
            VALUES (:nomepet, :dono, :tipo)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':nomepet' => $_POST['nomepet'],
        ':dono' => $_POST['dono'],
        ':tipo' => $_POST['tipo']
    ]);

    header("Location: listar.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando o animalzinho!</title>
</head>
<body>
    <form method = "POST">

    <input name="nomepet" placeholder="Nome do pet">
    <br><br>

    <input name="dono" placeholder="Dono">
    <br><br>

    <input name="tipo" placeholder="Tipo (cachorro, gato, etc...)">
    <br><br>

    <button>Salvar</button>

</form>
</body>
</html>