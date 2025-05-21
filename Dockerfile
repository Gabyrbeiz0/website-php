# Use a PHP CLI image
FROM php:8.3-cli

# Set working directory
WORKDIR /app

# Copy all project files
COPY . .

# Expose port 8000
EXPOSE 8000

# Start the built-in PHP server with router.php
CMD ["php", "-S", "0.0.0.0:8000", "router.php"]
