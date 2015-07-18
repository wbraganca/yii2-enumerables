<?php
/**
 * @link      https://github.com/wbraganca/yii2-enumerables
 * @copyright Copyright (c) 2015 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-enumerables/blob/master/LICENSE
 */

namespace wbraganca\enumerables;

use Yii;
use wbraganca\enumerables\AbstractEnumeration;

/**
 * Class for generates a boolean list
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 * @since 1.0.0
 */
class EnumBoolean extends AbstractEnumeration
{
    /**
     * Return label for the false value. Defaults to `No`.
     * @param $falseLabel string
     * @return string
     */
    public static function getFalseLabel($falseLabel = null)
    {
        static::initI18N();
        return empty($falseLabel) ? Yii::t('wb_enumerables', 'No') : $falseLabel;
    }

    /**
     * Return label for the true value. Defaults to `Yes`.
     * @param $trueLabel string
     * @return string
     */
    public static function getTrueLabel($trueLabel = null)
    {
        static::initI18N();
        return empty($trueLabel) ? Yii::t('wb_enumerables', 'Yes') : $trueLabel;
    }

    /**
     * Generates a boolean list
     * @param string $falseLabel the label for the false value
     * @param string $trueLabel the label for the true value
     * @return array
     */
    public static function getConstList($falseLabel = null, $trueLabel = null)
    {
        static::initI18N();
        return [
            false => static::getFalseLabel($falseLabel),
            true => static::getTrueLabel($trueLabel)
        ];
    }

    /**
     * Returns the label of a key
     * @param $key
     * @param $falseLabel string label for the false value. Defaults to `No`.
     * @param $trueLabel string label for the true value. Defaults to `Yes`.
     * @return string
     */
    public static function getLabel($key, $falseLabel = null, $trueLabel = null)
    {
        static::initI18N();
        return ($key) ? static::getTrueLabel($falseLabel) : static::getFalseLabel($falseLabel);
    }
}
