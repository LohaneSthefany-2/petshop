<?php

include("../login/conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM pets WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);
$pet = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "UPDATE pets SET nomepet = :nomepet, dono = :dono, tipo = :tipo WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':nomepet' => $_POST['nomepet'],
        ':dono' => $_POST['dono'],
        ':tipo' => $_POST['tipo'],
        ':id' => $id
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
    <title>Editar Pet</title>
</head>
<body>
    <form method="POST">
        <label for="nomepet">Nome do Pet:</label>
        <input type="text" id="nomepet" name="nomepet" value="<?= $pet['nomepet'] ?>">
        <br>
        <label for="dono">Dono:</label>
        <input type="text" id="dono" name="dono" value="<?= $pet['dono'] ?>">
        <br>
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="<?= $pet['tipo'] ?>">
        <br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>