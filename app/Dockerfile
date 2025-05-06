# syntax=docker/dockerfile:1.4

FROM --platform=$BUILDPLATFORM php:apache as builder
#FROM  --platform=$BUILDPLATFORM debian as builder

#CMD ["apache2-foreground"]

#FROM builder as dev-envs

RUN apt-get update && apt-get install -y --no-install-recommends git 

#RUN EOF
#useradd -s /bin/bash -m vscode
#groupadd docker
#usermod -aG docker vscode
#EOF

# Enable reverse proxy module
RUN a2enmod proxy proxy_http proxy_wstunnel rewrite headers ssl

# Enable PHP extensions
RUN docker-php-ext-install sockets pdo pdo_mysql

# Copy .htaccess to DocumentRoot
#COPY ./.htaccess /var/www/html/.htaccess
COPY ./ /var/www/html/

# install Docker tools (cli, buildx, compose)
COPY --from=gloursdocker/docker / /

#RUN chmod +x /var/www/html/ws/start.sh
#CMD /var/www/html/ws/start.sh
CMD apache2-foreground && /var/www/html/ws/start.sh
#FROM mariadb:latest
#COPY ./ws/data.sql /docker-entrypoint-initdb.d/init.sql
