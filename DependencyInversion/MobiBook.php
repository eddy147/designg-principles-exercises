<?php

namespace Exercises\DependencyInversion;

class MobiBook implements EBookInterface
{
    public function read()
    {
        return "reading a mobi book.";
    }
}