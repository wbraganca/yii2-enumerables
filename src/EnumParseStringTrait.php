<?php
/**
 * @link      https://github.com/wbraganca/yii2-enumerables
 * @copyright Copyright (c) 2015 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-enumerables/blob/master/LICENSE
 */

namespace wbraganca\enumerables;

use Yii;
use yii\base\InvalidParamException;

/**
 * EnumParseStringTrait trait.
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
trait EnumParseStringTrait
{
    /**
     * Return part of a string.
     * @param  string $value
     * @param  string $options
     * @return string
     */
    public static function filterAbbr($value, $options = [])
    {
        if (isset($options['abbr']) && isset($options['abbr']) === true) {
            $value = $options['abbr'] ? substr($value, 0, 3) : $value;
        }

        return $value;
    }

    /**
     * Returns string with all alphabetic characters converted to uppercase or lowercase.
     * @param  string $value
     * @param  string $options
     * @return string
     */
    public static function filterCase($value, $options = [])
    {
        if (isset($options['case'])) {
            if (!in_array($options['case'], ['lower', 'upper'])) {
                throw new InvalidParamException('Invalid Parameter case => ' . $options['case']);
            }
            if ($options['case'] === 'lower') {
                $value = mb_strtolower($value, Yii::$app->charset);
            } else {
                $value = mb_strtoupper($value, Yii::$app->charset);
            }
        }

        return $value;
    }

    /**
     * Apply options on a given string.
     * @param  string $value
     * @param  string $options
     * @return string
     */
    public static function applyOptions($value, $options = [])
    {
        $value = self::filterAbbr($value, $options);
        $value = self::filterCase($value, $options);

        return $value;
    }
}
