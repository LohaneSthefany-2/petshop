<?php
include("../login/conexao.php");

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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Pet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body
class="min-h-screen bg-cover bg-center"
style="background-image: url('../img/cadastrarpets.jpg');"
>

    <div class="min-h-screen bg-black/60 flex items-center justify-center p-10">
        <div class="w-full max-w-xl bg-white/20 backdrop-blur-lg rounded-3xl p-10 border border-white/20 shadow-2xl">
            <h1 class="text-5xl font-bold text-white text-center">
                 Cadastrar Pet
            </h1>
            <p class="text-pink-100 text-center mt-3 mb-8">
                Adicione um novo animal ao sistema
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
                        Dono
                    </label>

                    <input
                        type="text"
                        name="dono"
                        placeholder="Digite o dono"
                        class="w-full mt-2 p-4 rounded-2xl bg-white/70 outline-none"
                    >
                </div>

                <div>
                    <label class="text-white">
                        Tipo
                    </label>

                    <input
                        type="text"
                        name="tipo"
                        placeholder="Cachorro, gato..."
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