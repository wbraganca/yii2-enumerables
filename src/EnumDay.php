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
    const SUNDAY = 1;
    const MONDAY = 2;
    const TUESDAY = 3;
    const WEDNESDAY = 4;
    const THURSDAY = 5;
    const FRIDAY = 6;
    const SATURDAY = 7;

    /**
     * Generate list of days
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
     * Generate list of months
     * @return array
     */
    public static function getConstList($options=[])
    {
        $days = self::days();
        $abbr = (isset($options['abbr'])) ? $options['abbr'] : false;
        $case = null;

        if (isset($options['case'])) {
            if (!in_array($options['case'], ['lower', 'upper'])) {
                throw new InvalidParamException('Invalid Parameter case => ' . $options['case']);
            }
            $case = $options['case'];
        }

        if (isset($options['abbr']) && isset($options['abbr']) === true) {
            foreach ($days as $key => $value) {
                $data = $abbr ? substr($value, 0, 3) : $value;

                if ($case === 'lower') {
                    $data = strtolower($data);
                } elseif ($case === 'upper') {
                    $data = strtoupper($data);
                }

                $days[$key] = $data;
            }
        }

        return $days;
    }
}
