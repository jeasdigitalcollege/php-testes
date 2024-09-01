# Use a imagem do PHP com Nginx
FROM php:8.2-fpm

# Instale as extensões necessárias (se precisar de mais, adicione aqui)
RUN docker-php-ext-install pdo pdo_mysql

# Instale o Nginx
RUN apt-get update && apt-get install -y nginx

# Copie o arquivo de configuração do Nginx
COPY default.conf /etc/nginx/conf.d/default.conf

# Copie o código PHP para o container
COPY . /var/www/html

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Expõe as portas 80 (Nginx)
EXPOSE 80

# Comando para iniciar o PHP-FPM e o Nginx juntos
CMD ["bash", "-c", "php-fpm & nginx -g 'daemon off;'"]
