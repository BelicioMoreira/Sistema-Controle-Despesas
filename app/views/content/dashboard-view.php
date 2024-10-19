<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php require_once "../app/views/inc/head.php"; ?>
    </head>
    <body>
        <section class="section">
            <div class="container">
                <h1 class="title">
                    DASHBOARD
                </h1>
            </div>
        </section>

    <div class="container">
        <div class="box">        
            <section class="section">
            <div class="columns is-mobile">

                <div class="column">
                    <div class="field">
                    <p class="title is-5">Período</p>
                    <input class="input" type="date">
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <p class="title is-5">Entrada</p>
                        <div class="select is-fullwidth">
                            <select>
                                <option value="todos">Todos</option>
                                <option value="receita">Receita</option>
                                <option value="despesa">Despesa</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <p class="title is-5">Categoria</p>
                        <div class="select is-fullwidth">
                            <select>
                                <option value="todos">Todos</option>
                                <option value="receita">Receita</option>
                                <option value="despesa">Despesa</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                    <p class="title is-5">Buscar</p>
                    <input class="input" type="text">
                    </div>
                </div>

                <div class="column is-flex is-align-items-flex-end">
                    <a href="/new" class="button is-primary">Nova Entrada</a>
                </div>

            </div>
            </section>

            <section class="section">
            <div class="columns">

                <div class="column">
                    <div class="notification is-info">
                    <p>Total: 90,00</p>
                    </div>
                </div>

                <div class="column">
                    <div class="notification is-success">
                    <p>Receita: 90,00</p>
                    </div>
                </div>

                <div class="column">
                    <div class="notification is-danger">
                    <p>Despesas: 90,00</p>
                    </div>
                </div>

            </div>
            </section>

            <section class="section">
                <div class="container">
                    <h1 class="title">Entradas</h1>
                    <table class="table is-fullwidth">
                    <thead>
                        <tr>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Data</th>
                        <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <td><span class="tag is-success">Teste</span></td>
                        <td>90,00</td>
                        <td>Teste</td>
                        <td>TEst</td>
                        <td>01/01/01</td>
                        <td>
                            <a href="/new" class="button is-small is-info">Editar</a>
                            <button class="button is-small is-danger">Deletar</button>
                        </td>
                        </tr>

                        <tr>
                        <td><span class="tag is-danger">Teste</span></td>
                        <td>90,00</td>
                        <td>Teste</td>
                        <td>Teste</td>
                        <td>01/01/01</td>
                        <td>
                            <a href="/new" class="button is-small is-info">Editar</a>
                            <button class="button is-small is-danger">Deletar</button>
                        </td>
                        </tr>

                    </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

    <?php require_once "../app/views/inc/script.php"; ?>
    </body>
    </html>