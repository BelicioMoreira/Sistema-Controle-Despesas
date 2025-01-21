<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Despesas e Receitas</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#1E293B]">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden py-6 sm:py-12">
        <div class="container mx-auto p-6 bg-[#FFFFFF] shadow-xl rounded-xl max-w-5xl w-full">

            <div class="flex justify-between items-center mb-6">
                <h1 class="text-4xl font-extrabold text-[#1E40AF]">Lista de Despesas e Receitas</h1>
                <a href="/nova-entrada" class="bg-[#1E40AF] text-white py-2 px-4 rounded-lg hover:bg-[#4A69BD] transition duration-200">Nova Entrada</a>
            </div>

            <div class="grid grid-cols-4 gap-6 mb-6">
                <div class="flex flex-col gap-2">
                    <label for="periodo" class="block text-gray-700">Período</label>
                    <input type="month" id="periodo" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]" placeholder="mm/aaaa">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="entrada" class="text-gray">Entrada</label>
                    <select id="entrada" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]">
                        <option value="todos">Todos</option>
                        <option value="despesas">Despesas</option>
                        <option value="receitas">Receitas</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="categoria" class="text-gray">Categoria</label>
                    <select id="categoria" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]">
                        <option value="todos">Todos</option>
                        <option value="assinaturas">Assinaturas</option>
                        <option value="internet">Internet</option>
                        <option value="investimento">Investimento</option>
                    </select>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="buscar" class="text-gray">Buscar</label>
                    <input type="text" id="buscar" class="border border-gray-700 p-2 rounded-md focus:ring-2 focus:ring-[#1E40AF]">
                </div>
            </div>

            <div class="flex gap-6 mb-6">
                <div class="bg-[#1F7A6B] text-white p-4 rounded-lg shadow-md w-1/3 text-center">
                    <h2 class="font-bold">Total</h2>
                    <p>R$ 90,00</p>
                </div>
                <div class="bg-[#1F7A6B] text-white p-4 rounded-lg shadow-md w-1/3 text-center">
                    <h2 class="font-bold">Receita</h2>
                    <p>R$ 90,00</p>
                </div>
                <div class="bg-[#E74C3C] text-white p-4 rounded-lg shadow-md w-1/3 text-center">
                    <h2 class="font-bold">Despesas</h2>
                    <p>R$ 0,00</p>
                </div>
            </div>

            <div class="table-container">
                <table class="w-full table-auto mb-6">
                    <thead class="bg-[#2D3B3A]">
                        <tr>
                            <th class="py-2 px-4 text-center text-white">Tipo</th>
                            <th class="py-2 px-4 text-center text-white">Valor</th>
                            <th class="py-2 px-4 text-center text-white">Descrição</th>
                            <th class="py-2 px-4 text-center text-white">Categoria</th>
                            <th class="py-2 px-4 text-center text-white">Data</th>
                            <th class="py-2 px-4 text-center text-white">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr class="border-b">
                            <td class="py-2 px-4 bg-[#45B39D] text-white text-center">Receita</td>
                            <td class="py-2 px-4 text-center text-gray">90,00</td>
                            <td class="py-2 px-4 text-center text-gray">Teste</td>
                            <td class="py-2 px-4 text-center text-gray">Outros</td>
                            <td class="py-2 px-4 text-center text-gray">01/01/2024</td>
                            <td class="py-2 px-4 text-center">
                            <a href="/nova-entrada" class="inline-block bg-[#1E40AF] text-white py-1 px-2 rounded-lg hover:bg-[#4A69BD] transition duration-200">Editar</a>
                            <button class="bg-[#C0392B] text-white py-1 px-2 rounded-lg hover:bg-[#E74C3C]">Deletar</button>
                            </td> 
                        </tr>
                        
                        <tr class="border-b">
                            <td class="py-2 px-4 bg-[#E74C3C] text-white text-center">Despesa</td>
                            <td class="py-2 px-4 text-center text-gray">0,00</td>
                            <td class="py-2 px-4 text-center text-gray">Teste</td>
                            <td class="py-2 px-4 text-center text-gray">Outros</td>
                            <td class="py-2 px-4 text-center text-gray">01/01/2024</td>
                            <td class="py-2 px-4 text-center">
                            <a href="/nova-entrada" class="inline-block bg-[#1E40AF] text-white py-1 px-2 rounded-lg hover:bg-[#4A69BD] transition duration-200">Editar</a>
                            <button class="bg-[#C0392B] text-white py-1 px-2 rounded-lg hover:bg-[#E74C3C]">Deletar</button>
                            </td> 
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>
</html>
