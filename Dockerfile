FROM otherguy/php7-fpm:7.4

COPY --chown=www-data:www-data . /var/www

# Set working directory
WORKDIR /var/www/

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
