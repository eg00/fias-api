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
   php artisan migrate:fresh
```

## Импорт ФИАС

скачать [полную БД ФИАС](https://fias.nalog.ru/Updates) в формате XML
```shell
    wget https://fias-file.nalog.ru/downloads/2021.03.09/fias_xml.zip -O ~/
```
распаковать
```shell
    unzip ~/fias_xml.zip -d ~/fias_xml
```

импортировать
```shell
    screen
    php ./artisan liquetsoft:fias:install_from_folder ~/fias_xml
```

## Обновление ФИАС

скачать [обновление БД ФИАС](https://fias.nalog.ru/Updates) в формате XML
```shell
    wget https://fias-file.nalog.ru/downloads/2021.03.09/fias_delta_xml.zip -O ~/
```
распаковать
```shell
    unzip ~/fias_delta_xml.zip -d ~/fias_delta_xml
```

импортировать
```shell
    screen
    php ./artisan liquetsoft:fias:update_from_folder ~/fias_delta_xml
```

## Документация
[/docs](<url> "/docs")
