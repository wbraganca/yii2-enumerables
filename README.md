yii2-enumerables
================

An enumeration implementation to yii2 framework.

[![Latest Version](https://img.shields.io/github/release/wbraganca/yii2-enumerables.svg?style=flat-square)](https://github.com/wbraganca/yii2-enumerables/releases)
[![Software License](http://img.shields.io/badge/license-BSD3-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/wbraganca/yii2-enumerables.svg?style=flat-square)](https://packagist.org/packages/wbraganca/yii2-enumerables)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist wbraganca/yii2-enumerables "~1.0.0"
```

or add

```
"wbraganca/yii2-enumerables": "~1.0.0"
```

to the require section of your `composer.json` file.


Usage
-----
####EnumBoolean

Generates a boolean array. You can pass the false label (default No) and true label (default Yes).

```
use wbraganca\enumerables\EnumBoolean;

var_dump(EnumBoolean::getConstList());
array(2) {
    [0] => string(2) "No"
    [1] => string(3) "Yes"
}

EnumBoolean::getConstList('Inactive', 'Active');
array(2) {
    [0] => string(8) "Inactive"
    [1] => string(6) "Active"
}

```

####EnumYear

Generates an array of years between from and to years. Years till current system date will be generated if to year is not specified.

```
use wbraganca\enumerables\EnumYear;

EnumYear::getConstList(2015, 2000)
array(16) {
    [2015] => int(2015)
    [2014] => int(2014)
    [2013] => int(2013)
    [2012] => int(2012)
    [2011] => int(2011)
    [2010] => int(2010)
    [2009] => int(2009)
    [2008] => int(2008)
    [2007] => int(2007)
    [2006] => int(2006)
    [2005] => int(2005)
    [2004] => int(2004)
    [2003] => int(2003)
    [2002] => int(2002)
    [2001] => int(2001)
    [2000] => int(2000)
}
```

```
EnumYear::getConstList(2000, 2015)
array(16) {
    [2000] => int(2000)
    [2001] => int(2001)
    [2002] => int(2002)
    [2003] => int(2003)
    [2004] => int(2004)
    [2005] => int(2005)
    [2006] => int(2006)
    [2007] => int(2007)
    [2008] => int(2008)
    [2009] => int(2009)
    [2010] => int(2010)
    [2011] => int(2011)
    [2012] => int(2012)
    [2013] => int(2013)
    [2014] => int(2014)
    [2015] => int(2015)
}

```
