<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/test_db.php';

return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'en-US',
    'components' => [
        'db' => $db,
        'mailer' => [
            'useFileTransport' => true,
        ],
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
              '' => 'site/index',
              ['class' => 'yii\rest\UrlRule', 'controller' => 'comments'],
              ['class' => 'yii\rest\UrlRule', 'controller' => 'users'],
              ['class' => 'yii\rest\UrlRule', 'controller' => 'goods'],
              // ['class' => 'yii\rest\UrlRule', 'controller' => 'producers'],
              ['class' => 'yii\rest\UrlRule', 'controller' => 'categorys'],
              [
                'class' => 'yii\rest\UrlRule',
                'controller' => 'news',
                'pluralize' => false,
                'extraPatterns' => [
                  'GET add-like/{id}' => 'add-like',
                  'GET dis-like/{id}' => 'dis-like',
                ],
              ],
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
    ],
    'params' => $params,
];
