<?php

class Printer implements IPrinter
{
    public function printString(string $string)
    {
        echo '<em>' . $string . '</em>';
    }
}