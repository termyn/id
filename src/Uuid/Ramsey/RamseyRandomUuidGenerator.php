<?php

declare(strict_types=1);

namespace Termyn\Uuid\Ramsey;

use Ramsey\Uuid\Uuid as VendorUuid;
use Termyn\Uuid;
use Termyn\Uuid\RandomUuidGenerator;

final class RamseyRandomUuidGenerator implements RandomUuidGenerator
{
    public function generate(): Uuid
    {
        return new RamseyUuid(VendorUuid::uuid4());
    }
}
