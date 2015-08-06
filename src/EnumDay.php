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
 * Class for generates a list of months
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 * @since 1.1.0
 *
 */
class EnumDay extends AbstractEnumeration
{
    use EnumParseStringTrait;

    const SUNDAY = 1;
    const MONDAY = 2;
    const TUESDAY = 3;
    const WEDNESDAY = 4;
    const THURSDAY = 5;
    const FRIDAY = 6;
    const SATURDAY = 7;

    /**
     * Generate list of days.
     * @return array
     */
    protected static function days()
    {
        static::initI18N();
        return [
            self::SUNDAY => Yii::t('wb_enumerables', 'Sunday'),
            self::MONDAY => Yii::t('wb_enumerables', 'Monday'),
            self::TUESDAY => Yii::t('wb_enumerables', 'Tuesday'),
            self::WEDNESDAY => Yii::t('wb_enumerables', 'Wednesday'),
            self::THURSDAY => Yii::t('wb_enumerables', 'Thursday'),
            self::FRIDAY => Yii::t('wb_enumerables', 'Friday'),
            self::SATURDAY => Yii::t('wb_enumerables', 'Saturday')
        ];
    }

    /**
     * Generate formated list of days.
     * @return array
     */
    public static function getConstList($options=[])
    {
        $days = self::days();

        foreach ($days as $key => $value) {
            $days[$key] = self::applyOptions($value, $options);
        }

        return $days;
    }

    /**
     * Returns the name of the day.
     * @return int $value
     */
    public static function getLabel($value, $options=[])
    {
        $days = self::days();
        return (isset($days[$value])) ? self::applyOptions($days[$value], $options) : '';
    }
}
