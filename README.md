# Anilibria Docker
Конфигурацию Docker'a для запуска и отладки сайта https://anilibria.tv на локальной машине.

## Состав
* MariaDB
* PHP-FPM
* Memcached
* Sphinx
* XBT-Tracker
* PhpMyAdmin

## Установка
1. Добавьте в ваш `hosts` файл адрес тестового сайта:
    ```bash
    sudo gedit /etc/hosts
    ``` 
    И пропишите в данном файле:
    ```
    127.0.0.1 anilibria.local
    ```
2. При необходимости(обычно git сам подтягивает зависимости) загрузите исходный код Анилибрии:
    ```bash
    git submodule init
    git submodule update --remote
    ```
3. Для работы сайта необходимо добавить следующие строки в `/www/anilibria/private/config.php`:
    ```php
    $conf['mysql_host'] = 'mariadb';
    $conf['sphinx_host'] = 'sphinx';
    ```
## Запуск
Запускать можно либо стандарными способами docker'а, либо воспользовавшись скриптами для вашей ОС.
### Linux/Mac OS
Запустить docker-окружение можно используя bash-скрипт:
```bash
./start.sh
```

### Windows
Запустить docker-окружение можно используя batch-скрипт:
```
start.bat
```

## Пользователи
По-умолчанию создается два пользователя:
- `admin`/`password` с правами администратора
- `user`/`password` с правами обычного пользователя

## БД
### Доступ
БД доступна на `anilibria.local:3306`, либо через PhpMyAdmin http://anilibria.local:8080/ используя пару логин пароль `anilibria`/`anilibria` либо `root`/`toor`. 

### Первичное наполнение БД
Для импорта данных в бд, положите файлы импорта в папку `migrations` и прокиньте их в контейнер `mariadb`:
```yaml
volumes:    
    - ./migrations/example.sql:/docker-entrypoint-initdb.d/02-example.sql
```
