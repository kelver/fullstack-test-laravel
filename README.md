<p align="center"><img src="https://user-images.githubusercontent.com/22528943/191651100-84736963-3cd8-4282-a95c-6296622e2e3a.png" width="400"></a></p>



> ### Teste técnico aplicado para vaga Analista de Desenvolvimento PHP - Laravel - Full Stack - PLENO.

Empresa: Novakio | Penze

----------

# Início

## Instalação

Clone o repositório

    git clone https://github.com/kelver/fullstack-test-laravel.git

Acesse a pasta do projeto

    cd ./fullstack-test-laravel

Instale todas as dependências com o composer

    composer install

Copie o arquivo .env.example e faça as configurações de banco de dados necessárias.

    cp .env.example .env

Gere uma nova chave de aplicação

    php artisan key:generate

Execute as migrations para criar as tabelas no banco de dados. (**Necessário configuração do arquivo .env antes de executar as migrations**)

    php artisan migrate

Pode executar o servidor embutido, ou utilizar um servidor local como preferir.

    php artisan serve --port=8000
(**A porta está sendo indicada, pois, é a porta usada na aplicação frontend.**)

Caso tenha usado o servidor embutido, pode acessar a api http://localhost:8000/api

Se tudo estiver ok, você deve ver uma mensagem na tela acessando a rota acima:

![apiOk](https://user-images.githubusercontent.com/22528943/191650971-f1af1fe7-e580-408f-82ab-c1f82b790313.png)

Mais informações e detalhes, estou a disposição.

----------
