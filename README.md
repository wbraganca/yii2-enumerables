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
php composer.phar require --prefer-dist wbraganca/yii2-enumerables "*"
```

or add

```
"wbraganca/yii2-enumerables": "*"
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

####EnumMonth

Generates an array of months.

```
use wbraganca\enumerables\EnumMonth;

EnumMonth::getConstList()
array(12) {
    [1] => 'January'
    [2] => 'February'
    [3] => 'March'
    [4] => 'April'
    [5] => 'May'
    [6] => 'June'
    [7] => 'July'
    [8] => 'August'
    [9] => 'September'
    [10] => 'October'
    [11] => 'November'
    [12] => 'December'
}
```

```
EnumMonth::getConstList(['abbr' => true, 'case' => 'upper'])
array(12) {
    [1] => 'JAN'
    [2] => 'FEB'
    [3] => 'MAR'
    [4] => 'APR'
    [5] => 'MAY'
    [6] => 'JUN'
    [7] => 'JUL'
    [8] => 'AUG'
    [9] => 'SEP'
    [10] => 'OCT'
    [11] => 'NOV'
    [12] => 'DEC'
}
```

```
EnumMonth::getLabel(EnumMonth::JANUARY);
string(7) "January"
```

```
EnumMonth::getLabel(1, ['abbr' => true, 'case' => 'upper']);
string(3) "JAN"
```

```
EnumMonth::getLabel(1, ['case' => 'lower']);
string(7) "january"
```


####EnumDay

Generates an array of days.

```
use wbraganca\enumerables\EnumDay;

EnumDay::getConstList()
array(7) {
    [1] => 'Sunday'
    [2] => 'Monday'
    [3] => 'Tuesday'
    [4] => 'Wednesday'
    [5] => 'Thursday'
    [6] => 'Friday'
    [7] => 'Saturday'
}
```

```
EnumDay::getConstList(['abbr' => true, 'case' => 'upper'])
array(7) {
    [1] => 'SUN'
    [2] => 'MON'
    [3] => 'TUE'
    [4] => 'WED'
    [5] => 'THU'
    [6] => 'FRI'
    [7] => 'SAT'
}

```

```
EnumDay::getLabel(EnumDay::MONDAY);
string(6) "Monday"
```

```
EnumDay::getLabel(7, ['abbr' => true, 'case' => 'upper']);
string(3) "SAT"
```

```
EnumDay::getLabel(7, ['abbr' => true, 'case' => 'lower']);
string(3) "sat"
```
