<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Развертка

После скачивания репозитория требуется небольшая настройка

```apacheconf
# Установка пакетов композера
$ composer install

# Создать свой .env файл на основе .env.example
$ mv -v .env.example .env
```

Теперь заполните файл .env своими настройками подключения к БД

```apacheconf
# Драйвер БД
DB_CONNECTION=mysql

# Хост
DB_HOST=127.0.0.1

# Порт
DB_PORT=3306

# Название БД
DB_DATABASE=tools

# Пользователь БД
DB_USERNAME=tools

# Пароль к БД
DB_PASSWORD=tools
```

И последни йэтап

```apacheconf
# Установка NPM пакетов
$ npm install

# Сборка NPM дистрибутива
$ npm run build

# Запуск миграций и сидеров
$ php artisan migrate --seed
```

### Рутовая учетка
 - login: admin
 - password: @dmiN_39

