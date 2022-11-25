<?php

declare(strict_types=1);

namespace Termyn\Identifier;

abstract class Uuid implements Id
{
    public const NIL = '00000000-0000-0000-0000-000000000000';

    public function __toString(): string
    {
        return $this->toString();
    }

    abstract public static function fromString(string $uuid): self;

    abstract public static function fromBinary(string $uuid): self;

    public function equals(Id $that): bool
    {
        return strcmp((string) $this, (string) $that) === 0;
    }

    abstract public function toString(): string;

    abstract public function toBinary(): string;
}