<?php
namespace Universibo\CorsoPHP\Es01\Tests;

use PHPUnit_Framework_TestCase;
use Universibo\CorsoPHP\Es01\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testSumSimple()
    {
        $this->assertEquals(4, $this->calculator->sum(2, 2), '2 + 2 = 4');
    }
}
