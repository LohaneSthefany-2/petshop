<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PetShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>     

<body class="h-screen overflow-hidden">

    <div
        class="w-full h-full bg-cover bg-center relative"
        style="background-image: url('../img/cute.jpg');">
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 flex items-center justify-center h-full">

            <div class="w-[420px] bg-white/25 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-pink-200">

                <h1 class="text-5xl font-bold text-center text-white drop-shadow-lg">
                    Pet<span class="text-pink-400">Shop</span>
                </h1>

                <p class="text-center text-white mt-3 mb-8">
                    Sistema de Gerenciamento
                </p>

                <?php
                if(isset($_GET['erro'])){
                ?>

                    <div class="bg-red-500/20 border border-red-400 text-red-200 text-center p-3 rounded-2xl mb-5">
                        Email ou senha incorretos
                    </div>
                <?php
                }

                ?>
                <form action="verificar.php" method="POST" class="space-y-5">
                    <div>
                        <label class="text-white text-sm">
                            Email
                        </label>
                        <input
                            type="email"
                            name="email"
                            placeholder="Digite seu email"
                            required
                            class="w-full mt-2 p-4 rounded-2xl bg-white/70 text-gray-700 outline-none border border-transparent focus:border-pink-400">
                    </div>

                    <div>
                        <label class="text-white text-sm">
                            Senha
                        </label>
                        <input
                            type="password"
                            name="senha"
                            placeholder="Digite sua senha"
                            required
                            class="w-full mt-2 p-4 rounded-2xl bg-white/70 text-gray-700 outline-none border border-transparent focus:border-pink-400" >
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-pink-400 to-rose-300 hover:scale-105 transition-all duration-300 text-white font-bold py-4 rounded-2xl shadow-lg">
                        Entrar
                    </button>
                </form>
          
                </p>
            </div>
        </div>
    </div>
</body>
</html>