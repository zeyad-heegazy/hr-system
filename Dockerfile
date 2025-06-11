FROM richarvey/nginx-php-fpm:3.1.6

COPY . /var/www/html

COPY conf/nginx/nginx-site.conf /etc/nginx/sites-available/default

COPY scripts/00-laravel-deploy.sh /var/www/html/scripts/00-laravel-deploy.sh
RUN chmod +x /var/www/html/scripts/00-laravel-deploy.sh

ENV RUN_SCRIPTS 1

ENV WEBROOT /var/www/html/public
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
