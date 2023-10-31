# installation

## Open your terminal and run:

`composer require quanghuybest2k2/abc`

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use quanghuybest2k2\abc\say\Hello;
use quanghuybest2k2\abc\say\Bye;

$ten = "Đoàn Quang Huy";

$hello = new Hello();
$bye = new Bye();

echo $hello->sayHello($ten) . "<br/>" . $bye->sayBye($ten);

/* output:
Xin chào bạn Đoàn Quang Huy
Tạm biệt bạnĐoàn Quang Huy*/

```
