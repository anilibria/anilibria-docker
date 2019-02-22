Данный репозиторий содержит конфигурацию Docker'a
для запуска и отладки сайта https://anilibria.tv на локальной машине.

На данный момент, подключены сервисы **MariaDB**, **PHP-FPM**,
**Memcached**, **Sphinx**, **XBT-Tracker** и **PhpMyAdmin** для работы с БД


Первым делом добавьте в ваш `hosts` файл адрес тестового сайта:

    sudo gedit /etc/hosts
    
И пропишите в данном файле:
    
    127.0.0.1 anilibria.loc

Загрузите исходный код Анилибрии:

    git submodule update

Для работы сайта необходимо добавить следующие строки в `/www/anilibria/private/config.php`:

    $conf['mysql_host'] = 'mariadb';
    $conf['sphinx_host'] = 'sphinx';
    

Запустить docker-окружение можно используя bash-скрипт:

`./start.sh`

Так же можно запускать и стандартными, для docker'a, способами.

Для импорта данных в бд, положите файлы импорта в папку

**`docker-entrypoint-initdb.d`**

Доступы к mysql (и такие же к PhpMyAdmin):

`Login: anilibria`

`Password: anilibria`
    
PhpMyAdmin доступен по адресу: http://anilibria.loc:8080
