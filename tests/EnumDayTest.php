<?php
use wbraganca\enumerables\EnumDay;

class EnumDayTest extends PHPUnit_Framework_TestCase
{
    public function getDaysList()
    {
        return [
            1 => 'Sunday',
            2 => 'Monday',
            3 => 'Tuesday',
            4 => 'Wednesday',
            5 => 'Thursday',
            6 => 'Friday',
            7 => 'Saturday'
        ];
    }

    public function getAbbrDaysList()
    {
        $days = $this->getDaysList();
        foreach ($days as $key => $value) {
            $data = substr($value, 0, 3);
            $days[$key] = $data;
        }

        return $days;
    }

    public function testDaysList()
    {
        $days = EnumDay::getConstList();
        $valid = ($this->getDaysList() === $days);
        $this->assertTrue($valid, true);

        return $days;
    }

    public function testAbbrDaysList()
    {
        $days = EnumDay::getConstList(['abbr' => true]);
        $valid = ($this->getAbbrDaysList() === $days);
        $this->assertTrue($valid, true);

        return $days;
    }
}
