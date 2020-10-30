# desafio

utilizando laravel no back end e no front end bootstrap

uma tabela no mysql com os cadastros dos clientes

criado filtros através de GET no front end e utilizando função no laravel para buscar apenas o filtro desejado
conforme o filtro mostrará apenas aquilo que foi selecionado
além de um search que pode buscar clientes pelo nome


--- USO ---
-> no arquivo .env configurar o banco local, no caso mysql com uma tabela com o nome do database de desafio por exemplo,
você pode criar as tabelas manualmente no banco com os mesmos nomes do arquivo csv ou você tbm pode utilizar o comando 
"php artisan migration" no terminal e o laravel criara as tabela do banco, desde que esteja configurado corretamente a conexão com o banco no arquivo .env

com o banco criado, bastar executar o xampp e executar o mysql no mesmo
acessar através do localhost/desafio/
e a aplicação começara

lembrando que tem que ter o laravel instalado globalmente, pode ser necessario utilizar do "php artisan install" e/ou "php artisan install vendor" além do "composer install" e "npm install"