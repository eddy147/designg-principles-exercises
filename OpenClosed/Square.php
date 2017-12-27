<?php

namespace Exercises\OpenClosed;

class Square
{
    private $width;

    /**
     * Square constructor.
     * @param $width
     */
    public function __construct($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
}