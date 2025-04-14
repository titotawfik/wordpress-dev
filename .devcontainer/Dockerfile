FROM wordpress:latest

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    gnupg \
    git \
    zip \
    unzip \
    vim \
    sudo \
    less \
    mariadb-client \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js (latest LTS version)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

# Install useful global npm packages
RUN npm install -g yarn gulp-cli webpack webpack-cli @wordpress/scripts

# Install and configure PHP extensions
RUN docker-php-ext-install pdo pdo_mysql opcache

# Configure PHP for development
RUN { \
    echo 'memory_limit = 256M'; \
    echo 'max_execution_time = 300'; \
    echo 'upload_max_filesize = 64M'; \
    echo 'post_max_size = 64M'; \
    echo 'display_errors = On'; \
    echo 'error_reporting = E_ALL'; \
} > /usr/local/etc/php/conf.d/wordpress-php-config.ini

# Set working directory
WORKDIR /var/www/html

# Verify installations
RUN php -v && node -v && npm -v

# Add a non-root user for development work (optional)
RUN useradd -m -s /bin/bash -G www-data,sudo devuser \
    && echo "devuser ALL=(ALL) NOPASSWD:ALL" > /etc/sudoers.d/devuser
