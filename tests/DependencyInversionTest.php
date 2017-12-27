<?php

namespace Exercises\Tests;

use Exercises\DependencyInversion\MobiBook;
use Exercises\DependencyInversion\PDFBook;
use Exercises\DependencyInversion\PDFReader;
use PHPUnit\Framework\TestCase;

class DependencyInversionTest extends TestCase
{
    public function testItCanReadAPDFBook()
    {
        $b = new PDFBook();
        $r = new PDFReader($b);

        $this->assertRegExp('/pdf book/', $r->read());
    }

    public function testItCanReadAMobiBook()
    {
        $b = new MobiBook();
        $r = new PDFReader($b);

        $this->assertRegExp('/mobi book/', $r->read());
    }


}