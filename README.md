# To-Do-Laravel

## Table of Contents

-   [About](#about)
-   [Getting Started](#getting_started)
-   [Usage](#usage)
-   [Deployment](#deployment)
-   [Licence](Licence)

## About <a name = "about"></a>

O To-Do-Laravel é um aplicativo CRUD de gerenciamento de tarefas desenvolvido em Laravel. Este projeto tem como objetivo fornecer uma plataforma simples e eficiente para criar, editar, completar e excluir tarefas, utilizando o Bootstrap 5 para uma interface moderna e responsiva.

## Getting Started <a name = "getting_started"></a>

Estas instruções irão te guiar na obtenção de uma cópia do projeto em funcionamento na sua máquina local para fins de desenvolvimento e teste. Veja a seção [Deployment](#deployment) para notas sobre como implantar o projeto em um sistema ao vivo.

### Pré-requisitos

Certifique-se de ter os seguintes pré-requisitos instalados em seu sistema:

-   Um projeto Laravel 11 configurado.
-   Node.js e npm (Node Package Manager) instalados.
-   MySQL ou outro banco de dados compatível.

### Instalando

Siga os passos abaixo para configurar o ambiente de desenvolvimento:

1. **Clonar o Repositório**:
   Clone o repositório do projeto para a sua máquina local.

    ```bash
    git clone https://github.com/nill-pixel/To-Do-Laravel.git
    cd To-Do-Laravel
    ```

2. **Instalar Dependências do PHP**:
   Instale as dependências do PHP usando o Composer.

    ```bash
    composer install
    ```

3. **Instalar Dependências do Node**:
   Instale as dependências do Node.js, incluindo o Bootstrap 5 e o Sass.

    ```bash
    npm install -D bootstrap@5.3.3 sass
    npm install
    ```

4. **Configurar o Vite**:
   Configure o Vite para incluir seus arquivos Sass e JavaScript. Crie um arquivo 'app.scss' no diretório 'resources/sass' e atualize o 'vite.config.js' no diretório raiz do projeto:

    ```javascript
    import { defineConfig } from "vite";
    import laravel from "laravel-vite-plugin";

    export default defineConfig({
        plugins: [
            laravel({
                input: ["resources/sass/app.scss", "resources/js/app.js"],
                refresh: true,
            }),
        ],
    });
    ```

5. **Importar o Bootstrap**:
   Abra o arquivo 'resources/js/app.js' e importe o Bootstrap.

    ```javascript
    import "bootstrap";
    ```

    Em 'resources/sass/app.scss', importe os arquivos do Bootstrap Sass.

    ```scss
    @import "bootstrap/scss/bootstrap";
    ```

6. **Incluir Estilos e Scripts no Layout**:
   No arquivo de layout principal (por exemplo, 'app.blade.php'), adicione a linha abaixo antes da tag `</head>` para incluir os arquivos CSS e JavaScript compilados:

    ```blade
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    ```

7. **Compilar Ativos**:
   Execute o comando abaixo para compilar seus arquivos Sass e JavaScript:

    ```bash
    npm run dev
    ```

### Configurar o Banco de Dados

1. **Configurar o Arquivo `.env`**:
   Configure as variáveis de ambiente no arquivo `.env` para conexão com o banco de dados MySQL. Exemplos de configuração:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco_de_dados
    DB_USERNAME=usuario
    DB_PASSWORD=senha
    ```

2. **Executar Migrações**:
   Execute as migrações do banco de dados para criar as tabelas necessárias.

    ```bash
    php artisan migrate
    ```

## Usage <a name = "usage"></a>

Para usar o sistema, siga os passos abaixo:

1. **Inicie o Servidor de Desenvolvimento**:
   Execute o servidor de desenvolvimento do Laravel.

    ```bash
    php artisan serve
    ```

2. **Acesse a Aplicação**:
   Abra o navegador e acesse `http://localhost:8000` para interagir com o sistema de gerenciamento de tarefas.

## Licença <a name="licenca"></a>

Este projeto está licenciado sob a Licença APACHE - veja o arquivo [LICENSE](LICENSE) para mais detalhes.
