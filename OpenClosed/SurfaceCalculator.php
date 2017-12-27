<?php

namespace Exercises\OpenClosed;

class SurfaceCalculator
{
    const PRECISION = 2;

    public function calc($shape)
    {
        $surface = 0;
        if ($shape instanceof Circle) {
            $surface = pi() * $shape->getRadius() * $shape->getRadius();
        } elseif ($shape instanceof Square) {
            $surface = round($shape->getWidth() * $shape->getWidth(), self::PRECISION);
        }

        return round($surface, self::PRECISION);
    }
}