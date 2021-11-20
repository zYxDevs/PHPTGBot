FROM php:7.4-cli
COPY . .
WORKDIR /PHPTGBot/
RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install
RUN composer require longman/telegram-bot
RUN composer require radyakaze/phptelebot
CMD [ "php", "./main.php" ]
