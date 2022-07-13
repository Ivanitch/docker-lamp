<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=docker-lamp_mysql;dbname=docker-lamp',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
