<?php

use PHPUnit\Framework\TestCase;

require_once 'ReverseString.php';

class ReverseTest extends TestCase
{
    public function test_reverse() {
        $string = new ReverseString();
        $this->assertSame( '!торобоан акортС', $string->reverse('Строка наоборот!') );
    }
}