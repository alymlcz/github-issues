# Use PHP 8.2 with FPM support
FROM php:8.2-fpm

# Set the working directory inside the container
WORKDIR /var/www

# Install dependencies and required PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    net-tools \
    procps \
    vim \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    # Clean up cache to reduce image size
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Copy Composer from the official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the Laravel project files to the container
COPY . .

# Copy custom php-fpm config
COPY docker/php/www.conf /usr/local/etc/php-fpm.d/zz-www.conf
# COPY docker/php/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist

# Set proper file ownership for Laravel
RUN chown -R www-data:www-data /var/www

# Expose port 9001 to allow PHP-FPM to be accessed
EXPOSE 9001

# Start PHP-FPM when the container starts
CMD ["php-fpm"]
