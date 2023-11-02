<?php

use PHPUnit\Framework\TestCase;
use quanghuybest2k2\abc\say\Bye;
use quanghuybest2k2\abc\say\Hello;

class SayTest extends TestCase
{
    public function testSayHello()
    {
        $ten = "Đoàn Quang Huy";
        $expectedOutput = "Đoàn Quang Huy";
        $result = Hello::sayHello($ten);
        echo $result;
        $this->assertEquals($expectedOutput, $result);
    }
    public function testSayBye()
    {
        $ten = "Đoàn Quang Huy";
        $expectedOutput = "Đoàn Quang Huy";
        $result = Bye::sayHello($ten);
        echo $result;
        $this->assertEquals($expectedOutput, $result);
    }
}
