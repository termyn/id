<?php

declare(strict_types=1);

namespace Termyn\Uuid\Ramsey;

use Ramsey\Uuid\Uuid as VendorUuid;
use Termyn\Uuid;
use Termyn\Uuid\UuidGenerator;

final readonly class RamseyRandomUuidGenerator implements UuidGenerator
{
    public function generate(): Uuid
    {
        return new RamseyUuid(VendorUuid::uuid4());
    }
}
