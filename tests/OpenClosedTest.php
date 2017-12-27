<?php

namespace Exercises\Tests;

use Exercises\OpenClosed\Circle;
use Exercises\OpenClosed\Square;
use Exercises\OpenClosed\SurfaceCalculator;
use PHPUnit\Framework\TestCase;

class OpenClosedTest extends TestCase
{
    public function testCalculateSurfaceCircle()
    {
        $circle = new Circle(5);
        $surfaceCalculator = new SurfaceCalculator();

        $this->assertSame(round(pi()*25, 2), $surfaceCalculator->calc($circle));
    }

    public function testCalculateSurfaceSquare()
    {
        $circle = new Square(12);
        $surfaceCalculator = new SurfaceCalculator();

        $this->assertSame(round(144), $surfaceCalculator->calc($circle));
    }

}