<?php

use PHPUnit\Framework\TestCase;

class ToolsTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();

        $result = $calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }
}