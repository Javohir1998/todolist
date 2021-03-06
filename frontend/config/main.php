<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'language'   => 'en',
    'sourceLanguage' => 'en_GB',

    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'v1' => [
            'class' => 'frontend\modules\v1\Module',
        ],
    ],
    'components' => [
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

//        'urlManager' => [
//            'class' => 'codemix\localeurls\UrlManager',
//            'languages' => ['en', 'ru', 'uz'], // List all supported languages here
////            'enablePrettyUrl' => true,
////            'showScriptName' => false,
//
//        ],

        'urlManager' => array(
            'class' => \yii\web\UrlManager::class,
            'showScriptName'	=> false,
            'enablePrettyUrl'	=> true,
            'rules'	=> frontend\modules\v1\Module::$urlRules,

        ),

    ],
    'params' => $params,
];
