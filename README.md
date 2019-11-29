# projetos-de-extensao

## Tecnologias utilizadas
PHP 7.3
Laravel 5.8
Mysql

Para continuação do projeto é necessária a instalação das ferramentas acima.

## Construção
Para criação do projeto foi utilizado o Modelo de relatórios dos projetos de extensão. Foram utilizados como auxílio para construção do banco e api os documentos de "Linhas e áreas de extensão - COOPMED", "Edital do processo de seleção dos projetos de extensão" e "Linhas de pesquisa", todos disponibilizados pela professora.

## Criação do banco e api
A api do projeto foi feita com Laravel na versão 5.8, um framework PHP bastante completo e que disponibiliza diversas ferramentas para criação e manipulação do banco de dados. A estrutura do banco foi feita a partir de migrations [`https://laravel.com/docs/5.8/migrations#introduction`] e a inserção de dados a partir de seeders [`https://laravel.com/docs/5.8/seeding`].
Após a instalação das dependências o comando `php artisan migrate` cria as tabelas no banco escolhido e o comando `php artisan db:seed` insere os dados necessários no banco.
