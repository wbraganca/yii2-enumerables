<?php
/**
 * @link      https://github.com/wbraganca/yii2-enumerables
 * @copyright Copyright (c) 2015 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-enumerables/blob/master/LICENSE
 */

namespace wbraganca\enumerables;

use Yii;
use ReflectionClass;

/**
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 * @since 1.0.0
 */
abstract class AbstractEnumeration
{
    /**
     * Yii i18n messages configuration for generating translations
     * @return void
     */
    public static function initI18N()
    {
        if (empty(Yii::$app->i18n->translations['wb_enumerables'])) {
            Yii::setAlias("@wb_enumerables", __DIR__);
            Yii::$app->i18n->translations['wb_enumerables'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => "@wb_enumerables/messages",
                'forceTranslation' => true
            ];
        }
    }
}
