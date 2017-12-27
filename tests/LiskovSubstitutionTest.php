<?php

namespace Exercises\Tests;

use Exercises\LiskovSubstitution\Rectangle;
use PHPUnit\Framework\TestCase;

class LiskovSubstitutionTest extends TestCase
{
    public function testRectangleArea()
    {
        $r = new Rectangle();
        $r->setHeight(4);
        $r->setWidth(5);

        $this->assertSame(20, $r->area());
    }

    public function testSquareArea()
    {
        $r = new Rectangle();
        $r->setHeight(4);
        $r->setWidth(5);

        $this->assertSame(16, $r->area());
    }

}