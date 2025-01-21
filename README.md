# Sistema de Controle de Despesas

Este sistema foi criado para o desafio do curso **Codifica+**.

## Objetivo Geral

Criar um sistema de controle financeiro básico  utilizando PHP eMySQL, onde é possível:
- Gerenciar **despesas** e **receitas**.
- Registrar e classificar transaçãoes por **categoria**.
- Vizualizar o resumo financeiro em uma **dashboard**.

## Funcionalidades

## Instalação

### Pré-requisitos
- **PHP**
- **Composer**
- **MySQL**

### Passo a Passo

1. **Clone o repositório**
```bash
git@github.com:BelicioMoreira/controle-financeiro.git
```
2. **Mude para o diretorio**
```bash
cd sistema-controle-despesas
```
3. **Instale o Composer**
```bash
composer install
```
4. **Instale o npm**
```bash
npm install vite
```
5. **Copie o arquivo de configuração .env**
```bash
cp .env.example .env
```
6. **Gere a chave do Laravel**
```bash
php artisan key:generate
```
7. **Execute as migrações**
```bash
php artisan migrate
```
8. **Inicio o servidor**
```bash
php artisan serve &
```
9. **Iinicie o npm**
```bash
npm run dev
```
10. **Acesse a URL no seu navegador**
```bash
http://localhost:8080
```