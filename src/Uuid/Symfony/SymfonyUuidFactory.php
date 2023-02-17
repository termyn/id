<?php

declare(strict_types=1);

namespace Termyn\Uuid\Symfony;

use Symfony\Component\Uid\Uuid as VendorUuid;
use Termyn\Uuid;
use Termyn\Uuid\UuidFactory;

final readonly class SymfonyUuidFactory implements UuidFactory
{
    public function create(string $uuid): Uuid
    {
        return new SymfonyUuid(
            VendorUuid::fromString($uuid)
        );
    }
}
