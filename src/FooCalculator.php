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

    /**
     * Calculates Foo based on a Blabla object.
     *
     * @param Blabla $blabla The Blabla object to use for calculation.
     * @return int The calculated Foo value.
     */
    public static function calculateFooGivenBlabla(Blabla $blabla): string
    {
        // Here you would implement the logic to calculate Foo based on the Blabla object.
        // For this example, let's assume we just return a fixed value.
        // Replace this with your actual calculation.
        return IntResultBuilder::newBuilder()->withResponse(200)->buildAndReturnResponse();
    }
}
