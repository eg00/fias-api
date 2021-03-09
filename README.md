#FIAS API

## Установка и запуск
```shell
    git clone git@gitlab.com:eg00/fias-api.git fias_api
    cd fias_api
    cp .env.example .env
```
### в локальной среде:

```shell
    composer install
    php artisan key:generate
    php artisan serve
```
**Настроить параметры БД в файле .env**

```shell
   php artisan migrate:fresh --seed
```
## Документация
[/docs](<url> "/docs")
