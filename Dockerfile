FROM unit:php8.3

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql