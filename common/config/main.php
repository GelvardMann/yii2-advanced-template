<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => [
        'common\modules\main\Bootstrap',
        'common\modules\user\Bootstrap',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'common\modules\user\Module',
        ],
        'main' => [
            'class' => 'common\modules\main\Module',
        ],
    ],
];
