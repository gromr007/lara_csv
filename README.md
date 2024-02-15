<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Парсер для файлов csv

Получение файла через форму, 
парсинг, 
внесение данных в БД,
показ данных из БД.


###Используемые инструменты:

- Библиотека League csv 9.0
- Laravel dependency injection 
  - app/Http/Controllers/PerseCsvController.php
  - app/Http/Controllers/HomeController.php
- Laravel service container, service provider, Contract, Service, 
  - app/Providers/ParseCsvServiceProvider.php
  - app/Contracts/ParseCsv.php
  - app/Services/ParseCsv/League/League.php
- Repository
  - app/Repositories/DatacsvRepository.php
- Response Json
  - app/Http/Resources/DataCsvPaginateResource.php
- Get Data Scroll Cursor Pagination
    - app/Repositories/DatacsvRepository.php
- Inserting Large Data
  - app/Services/ParseCsv/League/League.php
- Validate request
  - app/Services/ParseCsv/ParentParseCsv.php
- Seeders
  - database/seeders/DatacsvsTableSeeder.php
- Models
  - Scope (app/Models/Datacsv.php)
- OOP
  - MVC 
  - Inheritance
  - Polymorphism
  - Dependency Injection
  - Registry
  - Repository
    

### Структура csv файлов:

Код;
Наименование;
Уровень1;
Уровень2;
Уровень3;
Цена;
ЦенаСП;
Количество;
Поля свойств;
Совместные покупки;
Единица измерения;
Картинка;
Выводить на главной;
Описание

Б0001471;
Вентилятор осевой вытяжной с сеткой D 125 (ERA 5S);
Import;
Модульные системы вентиляции;
;
346
75;
339
45;
1;
;
;
"шт";
_MG_8088;
0;

### Используемые Материалы

resources/materials
