# Пример элегантной формы

Пример формы входа в админку сделаной с использование Laravel, Sentry и Bootstrap.

Создайте директорию для проекта и клонируйте репозиторий

    mkdir eform
    cd eform
    git clone -b eform https://github.com/bskton/examples.git .

Выполните

    composer install

Создайте файл `app/config/local/database.php` с параметрами подключения к базе данных PostgreSQL

    <?php
    /**
     * app/config/local/database.php
     */
    return array(
        'default' => 'pgsql',

        'connections' => array(
            'pgsql' => array(
                'driver'   => 'pgsql',
                'host'     => 'localhost',
                'database' => 'dbname',
                'username' => 'dbuser',
                'password' => 'dbpassword',
                'charset'  => 'utf8',
                'prefix'   => '',
                'schema'   => 'public',
            ),
        ),
    );

Для MySQL `app/config/local/database.php` будет выглядет следующим образом

    <?php
    /**
     * app/config/local/database.php
     */
    return array(
        'default' => 'mysql',

        'connections' => array(
            'mysql' => array(
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'dbname',
                'username'  => 'dbuser',
                'password'  => 'dbpassword',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            )
        ),
    );

где `dbname` имя базы данных, к которой имеет доступ пользователь`dbuser` с паролем `dbpassword`.

(Опционально) Для порядка создайте файл `app/config/local/app.php` с насторйками приложения

    <?php
    /**
     * app/config/local/app.php
     */
    return array(
        'url' => 'http://your_example_domain_name',
        'key' => 'Your_32_char_secret_key!!!!!!!!!',
    );


Выполните миграции

    php artisan migrate --package=cartalyst/sentry
    php artisan migrate

Настройте свой веб-сервер так, чтобы при обращении на `http://your_example_domain_name` выполнялся `public/index.php`.

Директории, расположенные в `app/storage`, должны быть доступны для записи.

Для входа используйте логин `admin` и пароль `password`.
