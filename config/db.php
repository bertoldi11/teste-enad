<?php

if (getenv('host')) {
    $dataBase = array(
        'host'=>getenv('host'),
        'dataBase'=>getenv('dataBase'),
        'user'=>getenv('user'),
        'password'=>getenv('password'),
    );
} else {
    require 'local_settings.php';
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . $dataBase['host'] . ';dbname=' . $dataBase['dataBase'],
    'username' => $dataBase['user'],
    'password' => $dataBase['password'],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
