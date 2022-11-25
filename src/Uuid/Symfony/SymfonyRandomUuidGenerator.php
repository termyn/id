<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid\Symfony;

use Symfony\Component\Uid\Uuid as VendorUuid;
use Termyn\Identifier\Uuid;
use Termyn\Identifier\Uuid\RandomUuidGenerator;

final class SymfonyRandomUuidGenerator implements RandomUuidGenerator
{
    public function generate(): Uuid
    {
        return new SymfonyUuid(VendorUuid::v4());
    }
}
