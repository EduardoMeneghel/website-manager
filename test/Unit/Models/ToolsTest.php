<?php

use app\models\Tools;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class ToolsTest extends TestCase
{
    public function testCalculator()
    {
        $tools = new Tools();
        $result = $tools->calculator(2,1);
        assertEquals(3, $result);
    }
}