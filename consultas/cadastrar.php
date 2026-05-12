<?php
include("../login/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO pets (nomepet, dataconsulta, descricao)
            VALUES (:nomepet, :dataconsulta, :descricao)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':nomepet' => $_POST['nomepet'],
        ':dataconsulta' => $_POST['dataconsulta'],
        ':descricao' => $_POST['descricao']
    ]);

    header("Location: listar.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar consulta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body
    class="min-h-screen bg-cover bg-center"
    style="background-image: url('../cadastrarpets.jpg');"
>

    <div class="min-h-screen bg-black/60 flex items-center justify-center p-10">
        <div class="w-full max-w-xl bg-white/20 backdrop-blur-lg rounded-3xl p-10 border border-white/20 shadow-2xl">
            <h1 class="text-5xl font-bold text-white text-center">
                 Cadastrar Consulta
            </h1>
            <p class="text-pink-100 text-center mt-3 mb-8">
                Agende uma nova consulta para o seu pet
            </p>

            <form method="POST" class="space-y-5">
                <div>
                    <label class="text-white">
                        Nome do Pet
                    </label>

                    <input
                        type="text"
                        name="nomepet"
                        placeholder="Digite o nome"
                        class="w-full mt-2 p-4 rounded-2xl bg-white/70 outline-none"
                    >
                </div>

                <div>
                    <label class="text-white">
                        Data da Consulta
                    </label>

                    <input
                        type="text"
                        name="dataconsulta"
                        placeholder="Digite a data da consulta"
                        class="w-full mt-2 p-4 rounded-2xl bg-white/70 outline-none"
                    >
                </div>

                <div>
                    <label class="text-white">
                        Descrição
                    </label>

                    <input
                        type="text"
                        name="descricao"
                        placeholder="Descrição da consulta"
                        class="w-full mt-2 p-4 rounded-2xl bg-white/70 outline-none"
                    >
                </div>

                <button
                    class="w-full bg-pink-400 hover:bg-pink-300 transition-all duration-300 text-white font-bold py-4 rounded-2xl">
                    Salvar
                </button>
            </form>
        </div>
    </div>
</body>
</html>