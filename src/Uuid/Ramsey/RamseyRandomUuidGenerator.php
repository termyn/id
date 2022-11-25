<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid\Ramsey;

use Ramsey\Uuid\Uuid as VendorUuid;
use Termyn\Identifier\Uuid;
use Termyn\Identifier\Uuid\RandomUuidGenerator;

final class RamseyRandomUuidGenerator implements RandomUuidGenerator
{
    public function generate(): Uuid
    {
        return new RamseyUuid(VendorUuid::uuid4());
    }
}
