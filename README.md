# Child Vaccination Tracker

## Descrição do Projeto

Este é um aplicativo que serve como uma caderneta de vacinação digital para crianças, permitindo que os pais possam acompanhar a evolução de seus filhos. Além do controle de vacinas, o app permite o agendamento de consultas, gerenciamento de exames e registros de crescimento. Este projeto está sendo desenvolvido utilizando uma abordagem de Test-Driven Development (TDD).

## Stack Tecnológica

-   **Backend**: Laravel 11
-   **Frontend**: InertiaJS e React
-   **Banco de Dados**: MySQL
-   **Testes**: PHPUnit

## Funcionalidades

-   Registro e acompanhamento das vacinas da criança.
-   Agendamento e controle de consultas médicas.
-   Registro de crescimento e marcos do desenvolvimento infantil.
-   Gerenciamento de exames e resultados.

## Requisitos para Execução

-   PHP 8.1 ou superior
-   Composer
-   Node.js e npm/yarn
-   MySQL

## Como Executar o Projeto Localmente

1. Clone este repositório:

    ```sh
    git clone https://github.com/seu-usuario/child-vaccination-tracker.git
    ```

2. Entre no diretório do projeto:

    ```sh
    cd child-vaccination-tracker
    ```

3. Instale as dependências do backend:

    ```sh
    composer install
    ```

4. Instale as dependências do frontend:

    ```sh
    npm install
    # ou
    yarn install
    ```

5. Configure o arquivo `.env`:

    - Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente (banco de dados, etc).

6. Gere a chave da aplicação:

    ```sh
    php artisan key:generate
    ```

7. Execute as migrações do banco de dados:

    ```sh
    php artisan migrate
    ```

8. Inicie o servidor de desenvolvimento:

    ```sh
    php artisan serve
    ```

9. Compile os assets do frontend:
    ```sh
    npm run dev
    # ou
    yarn dev
    ```

## Testes

-   Para rodar os testes do projeto, utilize o comando:
    ```sh
    php artisan test
    ```

## Contribuição

-   Fork este repositório.
-   Crie uma nova branch para a funcionalidade que você deseja implementar.
-   Envie um Pull Request descrevendo as alterações.

## Licença

Este projeto está sob a licença MIT. Para mais informações, consulte o arquivo LICENSE.
