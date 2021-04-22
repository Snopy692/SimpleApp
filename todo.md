# Oliver App - ToDo

## Create catalogs structure
* core
    * controller (_Application controllers_)
    * helper (_Application helper classes_)
    * classes (_Application base engine classes_)
    * model (_Application models - need to DB_)
    * repository (_Application Database models repository_)
    * views (_Application views templates_)
        * partial (_Partials - eg. menu_)
        * mail (_Mail templates_)
        * region (_Region templates - eg header, footer_)
    * public (_Application uploaded files_)
* assests (_Application CSS/JS/SCSS files_)
    * css
        * style.css 
    * js
        * scripts.js 
* config (_Application config files_)
* bootstrap.php (_Add require autoload composer and routing.php_)
* index.php (_Add 'require bootstrap.php'_)
* routing.php (_Create base routing to App_)

## Install composer libraries
- twbs/bootstrap (_Bootstrap Framework library_)
- bramus/router (_Routing plugin_)
- components/font-awesome (_Font awesome iconic library_)
- kint-php/kint (_Variables debugger library_)
- josantonius/session (_Session manager library_)
- symfony/yaml (_YML files parser_)
- twig/twig (_Twig templates engine_)
- swiftmailer/swiftmailer (_Sending mails library_)
- squizlabs/php_codesniffer (_Check and fix PHP Syntax_)
- foroco/php-browser-detection (_Detect browser/OS system_)

## Prepare HTML structure
* core/views/region/header.tpl.php (included HTML5 doctype, links to stylesheets, include Roboto font from Google fonts [300,400 weight], FontAwesome)
* core/views/region/footer.tpl.php (include scripts eg. bootstrap, scripts.js)

## PHP CodeSniffer (Linux)
* Check PHP syntax
```vendor/squizlabs/php_codesniffer/bin/phpcs /core --colors```
* Fix codestyle
```vendor/squizlabs/php_codesniffer/bin/phpcbf /core```

## Geolocation Service
* Free IP Geolocation API (https://freegeoip.app/)

## DB TABLES
Foregin keys create 
http://aspercz.pl/asperczpl/programowanie/php/php/11_phpmyadmin/relacje_2.pdf

### Table _user_
```
* id (int|AUTO INCREMENT)
* name (VARCHAR 255|NOT NULL)
* password (VARCHAR 255|NOT NULL)
* data (BLOB|NULL)
* status (BOOLEAN|NOT NULL|DEFAULT 1)
```
### Table _client_
```
* id (int|AUTO INCREMENT)
* uid (int|NOT NULL|) - Reference to user.id
* email (VARCHAR 255|NOT NULL)
* first_name (VARCHAR 255|NOT NULL)
* last_name (VARCHAR 255|NOT NULL)
* company (VARCHAR 255|NOT NULL)
* street (VARCHAR 255|NOT NULL)
* house_number (VARCHAR 255|NOT NULL)
* flat_number (VARCHAR 255|NULL)
* zip_code (VARCHAR 255|NOT NULL)
* city (VARCHAR 255|NOT NULL)
* vat_number (VARCHAR 255|NOT NULL)
```

### Table _car_
```
* id (int|AUTO INCREMENT)
* full_name (VARCHAR 255|NOT NULL)
* segment (INT|NOT NULL) - Reference to car_segment.id
* car_type (INT|NOT NULL) - Reference to car_type.id
* fuel_type (INT|NOT NULL) - Reference to fule_type.id
* transmission_type (INT|NOT NULL) - Reference to transmission_type.id
* seats_number (INT|NOT NULL)
* fuel_consumption (FLOAT|NOT NULL)
* trunk_capacity (INT|NOT NULL)
* min_driver_age (INT|NOT NULL)
```

### Table _car_segment_
```
* id (int|AUTO INCREMENT)
* name (VARCHAR 255|NOT NULL)
```

### Table _car_type_
```
* id (int|AUTO INCREMENT)
* name (VARCHAR 255|NOT NULL)
```

### Table _car_fuel_type_
```
* id (int|AUTO INCREMENT)
* name (VARCHAR 255|NOT NULL)
```

### Table _car_transmission_
```
* id (int|AUTO INCREMENT)
* name (VARCHAR 255|NOT NULL)
```

### Table _car_opinion_
```
* id (int|AUTO INCREMENT)
* client (int|NOT NULL) - Reference to client.id
* car (int|NOT NULL) - Reference to car.id
* description (VARCHAR 255|NOT NULL)
* rank (int|NOT NULL)
```

### Table _reservation_status_
```
* id (int|AUTO INCREMENT)
* name (VARCHAR 255|NOT NULL)
```

### Table _reservation_
```
* id (int|AUTO INCREMENT)
* client (int|NOT NULL) - Reference to client.id
* car (int|NOT NULL) - Reference to car.id
* reservation_status (int|NOT NULL) - Reference to reservation_status.id
* date_from (DATE|NOT NULL)
* date_to (DATE|NOT NULL)
```

### Table _watchdog_
```
* id (int|AUTO INCREMENT)
* type (VARCHAR 255|NOT NULL)
* timestamp (TIMESTAMP|NOT NULL)
* message (TEXT|NOT NULL)
```

## Layout
* Admin panel similar to https://colorlib.com/wp/wp-content/uploads/sites/2/ample-admin-lite-freemium-admin-dashboard-template.jpg (only Bootstrap)
