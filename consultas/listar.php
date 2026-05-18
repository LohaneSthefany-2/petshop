<?php

include("../login/conexao.php");

$sql = "SELECT * FROM consultas";

$stmt = $conn->query($sql);

$consultas = $stmt->fetchAll();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consultas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="min-h-screen bg-cover bg-center"
    style="background-image: url('../img/listarpets.jpg');">

    <div class="min-h-screen bg-black/60 p-10">

        <div class="flex items-center justify-between mb-10">

            <div>
                <h1 class="text-5xl font-bold text-white">
                     Consultas
                </h1>
                <p class="text-pink-100 mt-2">
                    Lista de consultas agendadas
                </p>
            </div>

            <a
                href="cadastrar.php"
                class="bg-pink-400 hover:bg-pink-300 transition-all duration-300 text-white px-6 py-4 rounded-2xl font-bold shadow-xl">
                + Nova Consulta
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($consultas as $consulta){ ?>

                <div class="bg-white/20 backdrop-blur-lg rounded-3xl p-6 border border-white/20 shadow-2xl hover:scale-105 transition-all duration-300">
                    <img
                        src="../img/c3.jpg"
                        class="w-full h-52 object-cover rounded-2xl">

                    <div class="mt-5">
                        <h2 class="text-3xl font-bold text-white">
                            <?php echo $consulta['nomepet']; ?>
                        </h2>

                        <p class="text-pink-100 mt-3 text-lg">
                             Data:
                            <?php echo $consulta['dataconsulta']; ?>
                        </p>

                        <p class="text-pink-100 mt-2 text-lg">
                            Descrição:
                            <?php echo $consulta['descricao']; ?>
                        </p>
                    </div>

                    <div class="flex gap-4 mt-6">

                        <a
                            href="editar.php?id=<?php echo $consulta['id']; ?>"
                            class="flex-1 bg-blue-400 hover:bg-blue-300 transition-all duration-300 text-white text-center py-3 rounded-2xl font-bold">
                            Editar
                        </a>
                        <a
                            href="deletar.php?id=<?php echo $consulta['id']; ?>"
                            class="flex-1 bg-red-400 hover:bg-red-300 transition-all duration-300 text-white text-center py-3 rounded-2xl font-bold"
                        >
                            Excluir
                        </a>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</body>

</html>