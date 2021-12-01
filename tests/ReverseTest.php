<?php

use PHPUnit\Framework\TestCase;

require_once 'ReverseString.php';

class ReverseTest extends TestCase
{
    public function test_reverse() {
        $this->assertSame( '!торобоан акортС', ReverseString::reverse('Строка наоборот!'));
    }
}