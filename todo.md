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
* bootstrap.php (add require autoload composer and routing.php)
* index.php (add 'require bootstrap.php')
* routing.php (create base routing to App)

## Install composer libraries
- twbs/bootstrap
- bramus/router
- josantonius/request

## Prepare HTML structure
* core/page/header.php (included HTML5 doctype, links to stylesheets, include Roboto font from Google fonts [300,400 weight])
* core/page/footer.php (include scripts eg. bootstrap)
* core/page/index.php (display hello world with loaded bootstrap)