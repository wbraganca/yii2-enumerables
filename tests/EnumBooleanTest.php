<?php
use wbraganca\enumerables\EnumBoolean;

class EnumBooleanTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        Yii::$app->language = 'en-US';
    }

    public function testFalseLabel()
    {
        $value = EnumBoolean::getLabel(0);
        $this->assertEquals('No', $value);

        return $value;
    }

    public function testTrueLabel()
    {
        $value = EnumBoolean::getLabel(1);
        $this->assertEquals('Yes', $value);

        return $value;
    }

    public function testGetConstList()
    {
        $data = EnumBoolean::getConstList('Inactive', 'Active');
        $this->assertEquals([false => 'Inactive', true => 'Active'], $data);

        return $data;
    }
}
