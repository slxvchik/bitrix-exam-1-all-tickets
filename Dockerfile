FROM php:8.3-apache

# Включаем модули Apache
RUN a2enmod rewrite ssl headers

# Обновляем и устанавливаем системные зависимости
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    && rm -rf /var/lib/apt/lists/*

# Устанавливаем расширения PHP через docker-php-ext-install
RUN docker-php-ext-install \
    pdo_mysql \
    mysqli \
    bcmath \
    curl \
    zip \
    mbstring \
    exif \
    calendar

# Настраиваем и устанавливаем GD
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd

# Создаем SSL директорию
RUN mkdir -p /etc/apache2/ssl

# Очистка
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/src/*

# Проверяем установленные расширения
RUN php -m
