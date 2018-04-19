# ZAMAN - Laravel Jalali datetime component:
This component based on PHP International (php-intl) extension. So this PHP extension must be installed on youe web server. 

known as:

- Hijri Shami
- Jalali Date
- JDatetime
- هجری شمسی
- تقویم خورشیدی

### php-intl extension installation

- On windows servers, open your php.ini (which should be in Program Files/PHP), and simply uncomment the extension.
```
extension=php_intl.dll
```

- Debian based Linux (Debian/Ubuntu/Mint/ ...)
```
sudo apt-get install php-intl
```

-Redhat based Linux (Redhat/Centos/ ...)
```
sudo yum -y install php-intl
```
Restart Webserver - done.

### Composer Installation

```php
composer require keraken/laravel-jalali-date
```

### Integration with Laravel 5.*

Add Zaman to app aliases in config/app.php file

```php
// aliases
'Zaman' => Keraken\Zaman\Facades\Zaman::class,
```

### Usage samples

[Supported format documentation](http://userguide.icu-project.org/formatparse/datetime)


```php

// Jalali to Gregraian sample

echo Zaman::jTog('next week');
echo Zaman::jTog('now');
echo Zaman::jTog('1396-06-30 05:30:10');
echo Zaman::jTog ('۱۳۹۱/۱۰/۱۲ ۲۰:۳۰:۵۵', 'yyyy/MM/dd H:m:s', 'fa', 'en', 'Asia/Tehran');

// Gregorian to Jalali samples 
echo Zaman::gToj('2 days ago');
echo Zaman::gToj('2010-10-24 22:50:14');
echo Zaman::gToj('2014-09-21 07:12:54', 'EEEE yyyy/MMMM/dd H:m:s');


// moment samples
echo Zaman::moment(1494328806);
echo Zaman::moment(strtotime('3 hours ago'));
echo Zaman::moment(strtotime('2017-01-02 00:10:20'));
echo Zaman::momentEn(1494334506);

//in blader
{{ Zaman::gToj('2011-11-20 19:12:19') }}


```
## Team

This component is developed by the following person(s) and a bunch of [awesome contributors](https://github.com/keraken/laravel-jalali-date/graphs/contributors).

[![Aboozar Ghaffari](https://avatars2.githubusercontent.com/u/502961?v=3&s=70)](https://github.com/iamtartan) |
--- |
[Aboozar Ghaffari](https://github.com/iamtartan) |


##Support This Project
  
[![Donate via Paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LXEL22GFTXTKN)

### License

The Laravel Jalali datetime is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
