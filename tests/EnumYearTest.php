<?php
use wbraganca\enumerables\EnumYear;

class EnumYearTest extends PHPUnit_Framework_TestCase
{
    public function getYearList($from, $to)
    {
        $years = range($from, $to);
        return array_combine($years, $years);
    }

    public function testYearListDesc()
    {
        $data = EnumYear::getConstList(2015, 2000);
        $valid = ($this->getYearList(2015, 2000) === $data);
        $this->assertTrue($valid, true);

        return $data;
    }

    public function testYearListAsc()
    {
        $data = EnumYear::getConstList(2000, 2015);
        $valid = ($this->getYearList(2000, 2015) === $data);
        $this->assertTrue($valid, true);

        return $data;
    }

    public function testGetListWithOnlyStartYear()
    {
        $data = EnumYear::getConstList(2000);
        $valid = ($this->getYearList(2000, intval(date('Y'))) === $data);
        $this->assertTrue($valid, true);

        return $data;
    }
}
