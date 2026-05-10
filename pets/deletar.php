<?php

include("../login/conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM pets WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);

header("Location: listar.php");
exit();

?>