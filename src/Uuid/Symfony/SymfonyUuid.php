<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid\Symfony;

use Symfony\Component\Uid\Uuid as VendorUuid;
use Termyn\Identifier\Id;
use Termyn\Identifier\Uuid;

final class SymfonyUuid extends Uuid implements Id
{
    public function __construct(
        private readonly VendorUuid $uuid
    ) {
    }

    public static function fromString(string $uuid): self
    {
        return new self(
            VendorUuid::fromString($uuid)
        );
    }

    public static function fromBinary(string $uuid): Uuid
    {
        return new self(
            VendorUuid::fromBinary($uuid)
        );
    }

    public function toString(): string
    {
        return $this->uuid->toRfc4122();
    }

    public function toBinary(): string
    {
        return $this->uuid->toBinary();
    }
}