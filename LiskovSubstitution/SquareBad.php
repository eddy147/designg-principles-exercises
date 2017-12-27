<?php

namespace Exercises\LiskovSubstitution;

class Square
{
    private $size;

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function area()
    {
        return $this->size * $this->size;
    }
}