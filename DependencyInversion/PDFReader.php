<?php

namespace Exercises\DependencyInversion;

class PDFReader {

    private $book;

    function __construct(EBookInterface $book) {
        $this->book = $book;
    }

    function read() {
        return $this->book->read();
    }

}