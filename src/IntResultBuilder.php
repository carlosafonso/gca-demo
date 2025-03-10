<?php

namespace App;

/**
 * This is a convoluted way of returning a an arbitrary integer value.
 */
class IntResultBuilder
{
    private int $result;

    public static function newBuilder(): IntResultBuilder
    {
        return new IntResultBuilder();
    }

    public function withResponse(int $result): IntResultBuilder
    {
        $this->$result = $result;
        return $this;
    }

    public function buildAndReturnResponse(): int
    {
        return $this->result;
    }
}
