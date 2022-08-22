<h1> Como rodar o projeto </h1>
<p>Abra o terminal e cole o seguinte comando "git clone https://github.com/CyberAPOKA/turim_crud.git"</p>
<p>Abra o projeto no seu VSCode e digite "composer install"</p>
<p>Renomeie o arquivo .env.example para .env, crie um banco de dados e ajuste a .env</p>
<p>Abra um terminal no VSCode e digite "php artisan migrate", em seguida "php artisan key:generate", depois "php artisan serve" e vá para o localhost "http://127.0.0.1:8000/"</p>
<p>Possível erro: "No application encryption key has been specified." se acontecer isso vá no terminal e digite "php artisan config:cache" e recarregue a página</p>
