<?php

use wbraganca\enumerables\EnumBoolean;

class EnumBooleanPortugueseTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        Yii::$app->language = 'pt-BR';
    }

    public function testFalseLabel()
    {
        $value = EnumBoolean::getLabel(0);
        $this->assertEquals('Não', $value);

        return $value;
    }

    public function testTrueLabel()
    {
        $value = EnumBoolean::getLabel(1);
        $this->assertEquals('Sim', $value);

        return $value;
    }

    public function testGetConstList()
    {
        $data = EnumBoolean::getConstList();
        $this->assertEquals([false => 'Não', true => 'Sim'], $data);

        return $data;
    }
}
