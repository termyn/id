<?php

declare(strict_types=1);

namespace Termyn\Uuid\Symfony;

use Symfony\Component\Uid\Uuid as VendorUuid;
use Termyn\Id;
use Termyn\Uuid;

final class SymfonyUuid extends Uuid implements Id
{
    public function __construct(
        private readonly VendorUuid $uuid
    ) {
    }

    public static function random(): Uuid
    {
        return new self(VendorUuid::v4());
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

    public function toNameBased(string $name): Uuid
    {
        return new self(
            VendorUuid::v5($this->uuid, $name)
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
