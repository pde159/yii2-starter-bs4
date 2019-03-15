<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'yii2-starter-bs4-basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'ddAxQ-nYnzfV39wUNhbVoMdU686PngAA',
        ],
        'authManager' => [
            'class' => yii\rbac\DbManager::class,
        ],
        'cache' => [
            'class' => yii\caching\FileCache::class,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class'            => yii\swiftmailer\Mailer::class,
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class'  => yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'class'           => yii\web\UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => [
            ],
        ],
    ],
    'modules' => [
        'gridview' =>  [
            'class' => kartik\grid\Module::class,
        ],
        'user' => [
            'class'                         => Da\User\Module::class,
            'generatePasswords'             => true,
            'switchIdentitySessionKey'      => 'OIQixQ4gGLhTtceQ9fWkhfhN0gZLXJ7l',
            'enableGdprCompliance'          => true,
            'enableTwoFactorAuthentication' => true,
            'administratorPermissionName'   => 'administrators'
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => yii\debug\Module::class,
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => yii\gii\Module::class,
    ];
}

return $config;
