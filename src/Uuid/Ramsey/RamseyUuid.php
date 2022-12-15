<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid\Ramsey;

use Ramsey\Uuid\Uuid as VendorUuid;
use Ramsey\Uuid\UuidInterface as VendorUuidInterface;
use Termyn\Identifier\Id;
use Termyn\Identifier\Uuid;

final class RamseyUuid extends Uuid implements Id
{
    public function __construct(
        private readonly VendorUuidInterface $uuid,
    ) {

    }

    public static function random(): Uuid
    {
        return new self(VendorUuid::uuid4());
    }

    public static function fromString(string $uuid): Uuid
    {
        return new self(
            VendorUuid::fromString($uuid)
        );
    }

    public static function fromBinary(string $uuid): Uuid
    {
        return new self(
            VendorUuid::fromBytes($uuid)
        );
    }

    public function toNameBased(string $name): Uuid
    {
        return new self(
            VendorUuid::uuid5($this->uuid, $name)
        );
    }

    public function toString(): string
    {
        return $this->uuid->toString();
    }

    public function toBinary(): string
    {
        return $this->uuid->getBytes();
    }
}
