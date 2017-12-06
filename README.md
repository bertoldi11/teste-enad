This project is a test for a position as Software Engineer. :)

Powered by  [Yii Framework](http://www.yiiframework.com/).

REQUIREMENTS
------------

[PHP 5.6.x or 7.x](https://php.net)

[Composer](https://getcomposer.org)

[Mysql 5.5.*](https://www.mysql.com/)


CONFIGURATION
-------------

### Database

Copy and rename the file config/local_settings.php.example to config/local_settings.php

Insert your database access credential.

```php
$dataBase =  array (
    'host'=>'192.168.56.3',
    'dataBase'=>'teste-enad',
    'user'=>'root',
    'password'=>'123456'
);
```

### Dependencies

Run the command bellow, on application directory root, to install the dependencies :
```Bash
composer install
```

RUN APPLICATION
---------------

If you are in a development or test environment, should run in the application directory root the follow command:
```Bash
php yii [ip:port]
```

If you are in a production environment, should use a webserver like [Apache](https://www.apache.org/) or [NGINX](https://nginx.org/en/).