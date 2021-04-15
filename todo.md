# Oliver App - ToDo

## Create catalogs structure
* core
    * controller
    * helper
    * model
    * repository
    * views
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
- components/font-awesome
- kint-php/kint
- josantonius/session

## Prepare HTML structure
* core/views/header.php (included HTML5 doctype, links to stylesheets, include Roboto font from Google fonts [300,400 weight], FontAwesome)
* core/views/footer.php (include scripts eg. bootstrap, scripts.js)

## Database structure
* user [id,email,password,created,changed]
* user_data [id,uid,first_name,last_name]
* reservation [id,uid,reservation_type,description,date,status]
* reservation_type [id,name]
* reservation_status [id,name]

## Layout
* Admin panel similar to https://colorlib.com/wp/wp-content/uploads/sites/2/ample-admin-lite-freemium-admin-dashboard-template.jpg (only Bootstrap)