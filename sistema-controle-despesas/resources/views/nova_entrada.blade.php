<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Entrada</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</head>

<body class="bg-[#1E293B]">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden py-6 sm:py-12">
        <div class="container mx-auto p-6 bg-[#FFFFFF] shadow-xl rounded-xl max-w-5xl w-full">
            <h1 class="text-4xl font-extrabold text-[#1E40AF] mb-6">Registrar Transação</h1>

            <form action="#" method="POST" x-data="{ loading: false }" @submit.prevent="loading = true; setTimeout(() => loading = false, 3000)">
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div class="flex flex-col gap-2">
                        <label for="tipo" class="text-gray-700">Tipo</label>
                        <select id="tipo" name="tipo" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]">
                            <option value="despesa">Despesa</option>
                            <option value="receita">Receita</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="categoria" class="text-gray-700">Categoria</label>
                        <select id="categoria" name="categoria" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]">
                            <option value="assinaturas">Assinaturas</option>
                            <option value="internet">Internet</option>
                            <option value="investimento">Investimento</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="descricao" class="text-gray-700">Descrição</label>
                    <textarea id="descricao" name="descricao" rows="4" class="w-full border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]" placeholder="Digite a descrição..."></textarea>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div class="flex flex-col gap-2">
                        <label for="valor" class="text-gray-700">Valor</label>
                        <input type="text" id="valor" name="valor" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]" placeholder="Digite o valor">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="data" class="text-gray-700">Data</label>
                        <input type="date" id="data" name="data" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]" placeholder="dd/mm/yyyy">
                    </div>
                </div>

                <div class="flex justify-center mt-6">
                    <button 
                        type="submit" 
                        :disabled="loading"
                        class="bg-[#1E40AF] text-white py-2 px-6 rounded-lg hover:bg-[#4A69BD] transition duration-200 relative flex justify-center items-center w-48 h-12">
                        <div class="flex items-center justify-center w-full">
                            <span x-show="!loading">Salvar</span>
                            <div x-show="loading" class="w-5 h-5 border-4 border-t-4 border-gray-200 rounded-full animate-spin"></div>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
