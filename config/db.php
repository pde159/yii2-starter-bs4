<?php

return [
    'class'    => yii\db\Connection::class,
    'dsn'      => 'mysql:host=localhost;dbname=yii2db', //utf8_general_ci
    'username' => 'root',
    'password' => '',
    'charset'  => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
