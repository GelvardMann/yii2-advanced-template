<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\modules\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
            'loginUrl' => ['user/default/login'],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
            'errorAction' => 'main/default/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'main/default/index',
                '<action:index>' => 'main/<action>',
            ],
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'common\modules\user\Module',
            'controllerNamespace' => 'common\modules\user\controllers\backend',
            'viewPath' => '@common/modules/user/views/backend',
//            'passwordResetTokenExpire' => 3600,
        ],
        'main' => [
            'class' => 'common\modules\main\Module',
            'controllerNamespace' => 'common\modules\main\controllers\backend',
            'viewPath' => '@common/modules/main/views/backend',
        ],
    ],
    'params' => $params,
];
