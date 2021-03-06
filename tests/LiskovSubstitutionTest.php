<?php

namespace Exercises\Tests;

use Exercises\LiskovSubstitution\Rectangle;
use Exercises\LiskovSubstitution\SquareBad;
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

    /**
     * @todo Fix the implementation, so that this test passes.
     */
    public function testSquareArea()
    {
        $r = new SquareBad();
        $r->setHeight(4);
        $r->setWidth(5);

        //this fails!
        $this->assertSame(16, $r->area());
    }
}