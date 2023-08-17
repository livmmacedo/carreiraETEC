## Artigo sobre rotas em PHP sem framework
https://albuquerque53.medium.com/usando-rotas-no-php-sem-frameworks-c566525a47b8

# Definição da rota principal
RewriteBase /

# Se o diretório ou arquivos digitados na URL não existirem, seguir a RewriteRule
RewriteCond %{REQUEST_FILENAME} !-d       
RewriteCond %{REQUEST_FILENAME} !-f

# Rewrite Rule, redirecionar todas as requests para o index.php 
RewriteRule ^(.+)$ index.php [QSA,L]