## Como Instalar o Bootstrap 5 com o Laravel 11

### Pré-requisitos

Antes de começarmos, certifique-se de ter os seguintes pré-requisitos instalados em seu sistema:

-   Um projeto Laravel 11 configurado.
-   Node.js e npm (Node Package Manager) instalados.

### Passos:

1. **Instalar o Bootstrap via npm**:
   Abra seu terminal ou prompt de comando, navegue até o diretório raiz do seu projeto Laravel e execute o seguinte comando para instalar o Bootstrap 5:

    ```bash
    npm install -D bootstrap@5.3.3
    ```

    Isso instala o Bootstrap 5.3.3 como uma dependência de desenvolvimento para o seu projeto.

2. **Instalar o Sass**:
   Como usaremos o Sass para estilização, instale o compilador Sass com o seguinte comando:

    ```bash
    npm install -D sass
    ```

3. **Instalar as dependências**:
   Após instalar o Bootstrap e o Sass, instale as dependências restantes do projeto:

    ```bash
    npm install
    ```

4. **Configurar o Vite**:
   O Laravel 11 usa o Vite como o empacotador padrão para compilar ativos. Configure o Vite para incluir seus arquivos Sass e JavaScript:

    - Crie um novo arquivo Sass chamado 'app.scss' no diretório 'resources/sass'.
    - Abra o arquivo 'vite.config.js' no diretório raiz do seu projeto e atualize-o com o seguinte código:

        ```javascript
        import { defineConfig } from "vite";
        import laravel from "laravel-vite-plugin";

        export default defineConfig({
            plugins: [
                laravel({
                    input: [
                        "resources/sass/app.scss", // Você pode alterar para o nome que preferir
                        "resources/js/app.js",
                    ],
                    refresh: true,
                }),
            ],
        });
        ```

5. **Importar o Bootstrap**:
   Abra o arquivo 'resources/js/app.js' e importe o Bootstrap adicionando a seguinte linha:

    ```javascript
    import "bootstrap";
    ```

    O arquivo deve se parecer com o exemplo abaixo:

    ```javascript
    import "./bootstrap";
    import "bootstrap";
    ```

6. **Importar os arquivos do Bootstrap Sass**:
   Abra o arquivo 'resources/sass/app.scss' e importe os arquivos do Bootstrap Sass adicionando a seguinte linha no topo do arquivo:

    ```scss
    @import "bootstrap/scss/bootstrap";
    ```

7. **Incluir estilos e scripts no layout**:
   No arquivo de layout principal (por exemplo, 'app.blade.php'), adicione a seguinte linha antes da tag `</head>` de fechamento para incluir os arquivos CSS e JavaScript compilados:

    ```blade
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    ```

8. **Compilar ativos**:
   Execute os seguintes comandos para compilar seus ativos:

    ```bash
    npm run dev
    ```

    Isso compilará seus arquivos Sass e JavaScript, incluindo os ativos do Bootstrap.
