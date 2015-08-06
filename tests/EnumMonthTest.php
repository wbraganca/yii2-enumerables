<?php
use wbraganca\enumerables\EnumMonth;

class EnumMonthTest extends PHPUnit_Framework_TestCase
{
    public function getMonthsList()
    {
        return [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];
    }

    public function getAbbrMonthsList()
    {
        $months = $this->getMonthsList();
        foreach ($months as $key => $value) {
            $data = substr($value, 0, 3);
            $months[$key] = $data;
        }

        return $months;
    }

    public function testMonthsList()
    {
        $months = EnumMonth::getConstList();
        $valid = ($this->getMonthsList() === $months);
        $this->assertTrue($valid, true);

        return $months;
    }

    public function testAbbrMonthsList()
    {
        $months = EnumMonth::getConstList(['abbr' => true]);
        $valid = ($this->getAbbrMonthsList() === $months);
        $this->assertTrue($valid, true);

        return $months;
    }

    public function testLabelMonth()
    {
        $labelMonth = EnumMonth::getLabel(EnumMonth::JANUARY);
        $this->assertEquals($labelMonth, 'January');

        return $labelMonth;
    }

    public function testAbbrLabelMonth()
    {
        $labelMonth = EnumMonth::getLabel(EnumMonth::JANUARY, ['abbr' => true]);
        $this->assertEquals($labelMonth, 'Jan');

        return $labelMonth;
    }
}
