<?php

namespace Exercises\Tests;

use Exercises\DependencyInversion\PDFBook;
use Exercises\DependencyInversion\PDFReader;
use PHPUnit\Framework\TestCase;

class DependencyInversionTest extends TestCase
{
    function testItCanReadAPDFBook()
    {
        $b = new PDFBook();
        $r = new PDFReader($b);

        $this->assertRegExp('/pdf book/', $r->read());
    }

}