<?php


use App\MyClass;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function testMultiLineArray() {
        $class = new MyClass();

        $this->assertSame(3, $class->multiLineArray());
    }

    public function testSingleLineArray() {
        $class = new MyClass();

        $this->assertSame(7, $class->singleLineArray());
    }
}