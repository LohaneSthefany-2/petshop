<?php

require("../login/seguranca.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel PetShop</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="h-screen overflow-hidden">
    <div
        class="w-full h-full bg-cover bg-center relative"
        style="background-image: url('../img/animaispainel.jpg');">
    >
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 p-10 h-full flex flex-col">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-5xl font-bold text-white">
                        Pet<span class="text-pink-400">Shop</span>
                    </h1>
                    <p class="text-pink-100 mt-2">
                        Sistema de Gerenciamento
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-right">
                        <p class="text-white text-lg">
                            Olá,
                        </p>
                        <p class="text-pink-300 font-bold text-xl">
                            <?php echo $_SESSION['usuario']; ?>
                        </p>
                    </div>
                    <a
                        href="../login/logout.php"
                        class="bg-pink-400 hover:bg-pink-300 transition-all duration-300 text-white px-6 py-3 rounded-2xl font-bold"
                    >
                        Sair
                    </a>
                </div>
            </div>
            <div class="flex justify-center items-center flex-1 gap-10">
                <a
                    href="../pets/listar.php"
                    class="w-[300px] h-[220px] bg-white/20 backdrop-blur-lg rounded-3xl border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center justify-center shadow-2xl"
                >
                    <h2 class="text-3xl font-bold text-white">
                        Pets
                    </h2>
                    <p class="text-pink-100 mt-2">
                        Gerenciar pets
                    </p>
                </a>
                <a
                    href="../clientes/listar.php"
                    class="w-[300px] h-[220px] bg-white/20 backdrop-blur-lg rounded-3xl border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center justify-center shadow-2xl"
                >
                    <h2 class="text-3xl font-bold text-white">
                        Clientes
                    </h2>
                    <p class="text-pink-100 mt-2">
                        Gerenciar clientes
                    </p>
                </a>
                <a
                    href="../consultas/listar.php"
                    class="w-[300px] h-[220px] bg-white/20 backdrop-blur-lg rounded-3xl border border-white/20 hover:scale-105 transition-all duration-300 flex flex-col items-center justify-center shadow-2xl"
                >
                    <h2 class="text-3xl font-bold text-white">
                        Consultas
                    </h2>
                    <p class="text-pink-100 mt-2">
                        Gerenciar consultas
                    </p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>