<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
    <img src="/img/beams.jpg" alt="" class="absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2" width="1308" />
    <div class="absolute inset-0 bg-[url(/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
    
    <div class="relative bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
        <div class="mx-auto max-w-md">
            <h1 class="text-2xl font-bold text-center mb-6">Dashboard</h1>
            <div class="divide-y divide-gray-300/50">
                <!-- Elementos de Formulário e Filtros -->
                <div class="py-6 text-base leading-7 text-gray-600">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="periodo" class="block text-sm font-medium text-gray-700">Período</label>
                            <input id="periodo" class="input border-gray-300 rounded-md shadow-sm w-full" type="date">
                        </div>
                        <div>
                            <label for="entrada" class="block text-sm font-medium text-gray-700">Entrada</label>
                            <select id="entrada" class="input border-gray-300 rounded-md shadow-sm w-full">
                                <option value="todos">Todos</option>
                                <option value="receita">Receita</option>
                                <option value="despesa">Despesa</option>
                            </select>
                        </div>
                        <div>
                            <label for="categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
                            <select id="categoria" class="input border-gray-300 rounded-md shadow-sm w-full">
                                <option value="todos">Todos</option>
                                <option value="receita">Receita</option>
                                <option value="despesa">Despesa</option>
                            </select>
                        </div>
                        <div class="col-span-1 md:col-span-2">
                            <label for="buscar" class="block text-sm font-medium text-gray-700">Buscar</label>
                            <input id="buscar" class="input border-gray-300 rounded-md shadow-sm w-full" type="text">
                        </div>
                        <div class="flex justify-center items-center">
                            <a href="/new" class="button bg-blue-500 text-white px-4 py-2 rounded-md">Nova Entrada</a>
                        </div>
                    </div>
                </div>

                <!-- Notificações -->
                <div class="py-6 text-base leading-7 text-gray-600">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="notification bg-blue-100 text-blue-800 p-4 rounded-md shadow-md">
                            <p>Total: 90,00</p>
                        </div>
                        <div class="notification bg-green-100 text-green-800 p-4 rounded-md shadow-md">
                            <p>Receita: 90,00</p>
                        </div>
                        <div class="notification bg-red-100 text-red-800 p-4 rounded-md shadow-md">
                            <p>Despesas: 90,00</p>
                        </div>
                    </div>
                </div>

                <!-- Tabela de Entradas -->
                <div class="py-6">
                    <h2 class="text-lg font-semibold mb-4">Entradas</h2>
                    <table class="table-auto w-full text-sm text-left border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2">Tipo</th>
                                <th class="border border-gray-300 px-4 py-2">Valor</th>
                                <th class="border border-gray-300 px-4 py-2">Descrição</th>
                                <th class="border border-gray-300 px-4 py-2">Categoria</th>
                                <th class="border border-gray-300 px-4 py-2">Data</th>
                                <th class="border border-gray-300 px-4 py-2">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2"><span class="tag bg-green-200 text-green-800 px-2 py-1 rounded-md">Teste</span></td>
                                <td class="border border-gray-300 px-4 py-2">90,00</td>
                                <td class="border border-gray-300 px-4 py-2">Teste</td>
                                <td class="border border-gray-300 px-4 py-2">Teste</td>
                                <td class="border border-gray-300 px-4 py-2">01/01/01</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a href="/new" class="button bg-blue-500 text-white px-2 py-1 rounded-md text-sm">Editar</a>
                                    <button class="button bg-red-500 text-white px-2 py-1 rounded-md text-sm">Deletar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
