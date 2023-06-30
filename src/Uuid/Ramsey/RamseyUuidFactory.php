<?php

declare(strict_types=1);

namespace Termyn\Uuid\Ramsey;

use Ramsey\Uuid\Uuid as VendorUuid;
use Termyn\Uuid;

final readonly class RamseyUuidFactory implements Uuid\UuidFactory
{
    public function create(string $uuid): Uuid
    {
        return new RamseyUuid(
            VendorUuid::fromString($uuid)
        );
    }
}
