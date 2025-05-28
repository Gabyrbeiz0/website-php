# Use PHP CLI base image
FROM php:8.3-cli

# Install dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    default-mysql-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

# Expose port 8000
EXPOSE 8000

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:8000", "router.php"]
