# Use the official PHP 7.4 image with Apache
FROM php:7.4-apache

# Copy application source
COPY app/ /var/www/html/

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Enable Apache mod_rewrite for URL rewrites
RUN a2enmod rewrite

# Change the ownership and permissions of the app files
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]