FROM php:8.4-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libwebp-dev \
    libzip-dev \
    zip \
    unzip \
    icu-dev \
    postgresql-dev \
    imagemagick \
    imagemagick-dev \
    oniguruma-dev \
    linux-headers \
    $PHPIZE_DEPS

# Install PHP extensions
RUN docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
    && docker-php-ext-install -j$(nproc) \
        pdo_pgsql \
        pgsql \
        gd \
        zip \
        intl \
        bcmath \
        opcache \
        pcntl \
        mbstring \
        exif

# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Install ImageMagick extension (for Spatie Media Library)
RUN pecl install imagick && docker-php-ext-enable imagick

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Node.js 22 for artisan commands that need node
RUN apk add --no-cache nodejs npm

# Create app user matching host UID/GID for file permissions
ARG UID=1000
ARG GID=1000
RUN addgroup -g ${GID} -S app && adduser -u ${UID} -S app -G app

# Set working directory
WORKDIR /var/www/html

# Set permissions
RUN chown -R app:app /var/www/html

USER app

EXPOSE 9000

CMD ["php-fpm"]
