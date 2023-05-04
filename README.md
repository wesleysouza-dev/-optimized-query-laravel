
# Lista de Posts - Query boa e má otimizada
Exemplo de listagem de posts, a qual é carregada após clicar em dois botões. Afim de comparação, um botão carregará de uma forma mais otimizada e o outro não.

Através do próprio navegador você poderá ver o tempo que cada requisição levou para ser finalizada. A aplicação conta também como dependência de desenvolvimento o pacote laravel debugbar, que pode ser utilizada para analisar as querys e visualizar o tempo de cada query.

### Demo

Caso queira ver uma demonstração online, acesse esse link: [https://wesleysouza.dev/projetos/redbelt/sql-performance/](https://wesleysouza.dev/projetos/redbelt/sql-performance/)

### Pré requisitos

- Docker Desktop
- Composer


Com seu Docker Desktop iniciado, rodar os comandos:

#### Instalar dependencias e iniciar serviço
`./vendor/bin/sail composer install`

`./vendor/bin/sail up`

#### Acessar ambiente de desenvolvimento
`./vendor/bin/sail shell`

#### Rodar migrations e seeders
`./vendor/bin/sail php artisan migrate`

`./vendor/bin/sail php artisan db:seed --class=UsersTableSeeder`

`./vendor/bin/sail php artisan db:seed --class=PostsTableSeeder`

#### Acessar rota
`http://127.0.0.1/blog`
