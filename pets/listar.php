<?php

include("../login/conexao.php");

$sql = "SELECT * FROM pets";
$stmt = $conn->query($sql);
$pets = $stmt->fetchAll();

?>

<h1>Pets</h1>

<a href="cadastrar.php">Cadastrar Pet</a>

<?php foreach ($pets as $pet) { ?>
    <p>
        <?php echo $pet['nomepet']; ?> -
        <?php echo $pet['dono']; ?> -
        <?php echo $pet['tipo']; ?>
        <a href="editar.php?id=<?php echo $pet['id']; ?>">Editar</a>
        <a href="deletar.php?id=<?php echo $pet['id']; ?>">Excluir</a>
    </p>
<?php } ?>