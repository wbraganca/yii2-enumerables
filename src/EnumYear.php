<?php
/**
 * @link      https://github.com/wbraganca/yii2-enumerables
 * @copyright Copyright (c) 2015 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-enumerables/blob/master/LICENSE
 */

namespace wbraganca\enumerables;

use Yii;
use yii\base\InvalidConfigException;

/**
 * Class for generates a list of years
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 * @since 1.0.0
 *
 */
class EnumYear
{
    /**
     * Generates a list of years
     * @param integer $from the start year
     * @param integer $to the end year
     * @return array
     */
    public static function getConstList($from, $to = null)
    {
        if ($to === null) {
            $to = intval(date("Y"));
        }
        $years = range($from, $to);

        return array_combine($years, $years);
    }
}
