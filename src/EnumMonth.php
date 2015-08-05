<?php
/**
 * @link      https://github.com/wbraganca/yii2-enumerables
 * @copyright Copyright (c) 2015 Wanderson Bragança
 * @license   https://github.com/wbraganca/yii2-enumerables/blob/master/LICENSE
 */

namespace wbraganca\enumerables;

use Yii;
use yii\base\InvalidParamException;
use wbraganca\enumerables\AbstractEnumeration;

/**
 * Class for generates a list of months
 *
 * @author Wanderson Bragança <wanderson.wbc@gmail.com>
 * @since 1.1.0
 *
 */
class EnumMonth extends AbstractEnumeration
{
    const JANUARY = 1;
    const FEBRUARY = 2;
    const MARCH = 3;
    const APRIL = 4;
    const MAY = 5;
    const JUNE = 6;
    const JULY = 7;
    const AUGUST = 8;
    const SEPTEMBER = 9;
    const OCTOBER = 10;
    const NOVEMBER = 11;
    const DECEMBER = 12;

    protected static function months()
    {
        static::initI18N();
        return [
            self::JANUARY => Yii::t('wb_enumerables', 'January'),
            self::FEBRUARY => Yii::t('wb_enumerables', 'February'),
            self::MARCH => Yii::t('wb_enumerables', 'March'),
            self::APRIL => Yii::t('wb_enumerables', 'April'),
            self::MAY => Yii::t('wb_enumerables', 'May'),
            self::JUNE => Yii::t('wb_enumerables', 'June'),
            self::JULY => Yii::t('wb_enumerables', 'July'),
            self::AUGUST => Yii::t('wb_enumerables', 'August'),
            self::SEPTEMBER => Yii::t('wb_enumerables', 'September'),
            self::OCTOBER => Yii::t('wb_enumerables', 'October'),
            self::NOVEMBER => Yii::t('wb_enumerables', 'November'),
            self::DECEMBER => Yii::t('wb_enumerables', 'December')
        ];
    }

    /**
     * Generate list of months
     * @return array
     */
    public static function getConstList($options=[])
    {
        $months = self::months();
        $abbr = (isset($options['abbr'])) ? $options['abbr'] : false;
        $case = null;

        if (isset($options['case'])) {
            if (!in_array($options['case'], ['lower', 'upper'])) {
                throw new InvalidParamException('Invalid Parameter case => ' . $options['case']);
            }
            $case = $options['case'];
        }

        if (isset($options['abbr']) && isset($options['abbr']) === true) {
            foreach ($months as $key => $value) {
                $data = $abbr ? substr($value, 0, 3) : $value;

                if ($case === 'lower') {
                    $data = strtolower($data);
                } elseif ($case === 'upper') {
                    $data = strtoupper($data);
                }

                $months[$key] = $data;
            }
        }

        return $months;
    }
}
