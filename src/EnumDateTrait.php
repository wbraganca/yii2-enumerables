<?php
/**
 * @link      https://github.com/wbraganca/yii2-enumerables
 * @copyright Copyright (c) 2015 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-enumerables/blob/master/LICENSE
 */

namespace wbraganca\enumerables;

use yii\base\InvalidParamException;

/**
 * EnumDateTrait trait.
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 */
trait EnumDateTrait
{
    public static function formatValue($value, $options = [])
    {
        $abbr = (isset($options['abbr'])) ? $options['abbr'] : false;

        if (isset($options['abbr']) && isset($options['abbr']) === true) {
            $value = $abbr ? substr($value, 0, 3) : $value;
        }

        if (isset($options['case'])) {
            if (!in_array($options['case'], ['lower', 'upper'])) {
                throw new InvalidParamException('Invalid Parameter case => ' . $options['case']);
            }
            if ($options['case'] === 'lower') {
                $value = strtolower($value);
            } else {
                $value = strtoupper($value);
            }
        }

       return $value;
    }
}
