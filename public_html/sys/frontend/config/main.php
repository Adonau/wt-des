<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'homeUrl' => '/',
    
    'bootstrap' => ['externalLinks'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'ru-RU',
    'components' => [
        'externalLinks' =>
        [
            'class' => 'skeeks\yii2\externalLinks\ExternalLinksComponent',
            'enabled' => true,
            'noReplaceLocalDomain' => true,
            'backendRoute' => '/externallinks/redirect/redirect',
            'backendRouteParam' => 'url',
            'enabledB64Encode' => true,
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'decimalSeparator' => '',
            'thousandSeparator' => '',
            'currencyCode' => 'EUR',
            'defaultTimeZone' => 'Europe/Moscow',
            'locale' => 'ru',
            'dateFormat' => 'php:D. d.m.Y',
            'datetimeFormat' => 'php:D/M/Y H:i',
            'timeFormat' => 'php:H:i:s',
        ],    
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],

                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
             'useFileTransport' => false,
             'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'frelfrel123@yandex.ru',
                'password' => 'frel198903',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'request' => [
            'baseUrl' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [ 
                  'go' => 'externallinks/redirect/redirect',
                 '<action:\w+>'=>'site/<action>',
                 'blog/<controller:quests-on-pets>/<action>' => '<controller>/<action>'
            ],
        ],
    ],

    'params' => $params,

    'modules'    =>
    [
        'externallinks' =>
        [
            'class' => 'skeeks\yii2\externalLinks\ExternalLinksModule',
        ],
    ]
];



