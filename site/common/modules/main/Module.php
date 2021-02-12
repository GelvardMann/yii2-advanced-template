<?php

namespace common\modules\main;

use Yii;
use yii\caching\CacheInterface;

/**
 * shop module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @var string
     */
    public $controllerNamespace = 'common\modules\main\controllers';

    /**
     * @var int
     */
    public int $countUploadFiles = 7;

    /**
     * {}
     * @param $category
     * @param $message
     * @param array $params
     * @param null $language
     * @return string
     */
    public static function t($category, $message, $params = [], $language = null): string
    {
        return Yii::t('modules/shop/' . $category, $message, $params, $language);
    }

    /**
     * {}
     * @param $alias
     * @return string
     */
    public static function getAlias($alias): string
    {
        return Yii::getAlias($alias);
    }

    public static function getCache(): CacheInterface
    {
        return Yii::$app->cache;
    }
}


