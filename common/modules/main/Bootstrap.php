<?php

namespace common\modules\main;

use Yii;
use yii\base\BootstrapInterface;
use yii\base\Application;

class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {

//        $this->registerTranslations($app);
        $this->registerUrlManager($app);

    }

//    public function registerTranslations(Application $app)
//    {
//        $app->i18n->translations['modules/main/*'] = [
//            'class' => 'yii\i18n\PhpMessageSource',
//            'forceTranslation' => true,
//            'basePath' => '@common/modules/main/messages',
//            'fileMap' => [
//                'modules/main/module' => 'module.php',
//            ],
//        ];
//    }

    public function registerUrlManager(Application $app)
    {
        $app->getUrlManager()->addRules(
            [
                '/' => 'main/default/index'
            ]
        );
    }
}
