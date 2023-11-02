# installation

## Open your terminal and run:

`composer require quanghuybest2k2/abc`

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use quanghuybest2k2\abc\say\Bye;
use quanghuybest2k2\abc\say\Hello;

$ten = "Đoàn Quang Huy";

$hello = Hello::sayHello($ten);
$bye = Bye::sayBye($ten);

echo $hello . "<br/>" . $bye;

/* output:
Xin chào bạn Đoàn Quang Huy
Tạm biệt bạn Đoàn Quang Huy*/

```
