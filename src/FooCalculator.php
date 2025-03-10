<?php

namespace App;

class FooCalculator
{
    public static function calculateFooGivenBaz(Baz $baz): int
    {
        return IntResultBuilder::newBuilder()->withResponse(42)->buildAndReturnResponse();
    }

    public static function calculateFooGivenQuux(Quux $quux): int
    {
        return IntResultBuilder::newBuilder()->withResponse(108)->buildAndReturnResponse();
    }
}
