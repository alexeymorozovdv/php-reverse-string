<?php

class ReverseString
{
    // Перевернуть строку и сделать так,
    // чтобы кириллица нормально отображалась
    public function reverse($str): string
    {
        preg_match_all('/./us', $str, $arr);
        return join('', array_reverse($arr[0]));
    }
}