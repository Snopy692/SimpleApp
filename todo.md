# Oliver App - ToDo

## Create catalogs structure
* core
    * model
    * helper
    * repository
    * page
* assests
    * css
        * style.css 
    * js
        * scripts.js 
* bootstrap.php (require autoload composer and routing.php)
* index.php
* routing.php (create base routing to App)

## Install composer libraries
- twbs/bootstrap
- bramus/router
- josantonius/request

## Prepare HTML structure
* core/page/header.php (included HTML5 doctype, links to stylesheets)
* core/page/footer.php (include scripts eg. bootstrap)
* index.php (require bootstrap.php)