<?php

namespace App;

class FooCalculator
{
    public static function calculateFooGivenBaz(Baz $baz): int
    {
        return 42;
    }

    public static function calculateFooGivenQuux(Quux $quux): int
    {
        return 108;
    }
}
