<?php

use PHPUnit\Framework\TestCase;

require_once 'ReverseString.php';

class ReverseTest extends TestCase
{
    public function test_reverse() {
        $string = 'Строка наоборот!';
        $this->assertSame( '!торобоан акортС', ReverseString::reverse('Строка наоборот!'));
    }
}