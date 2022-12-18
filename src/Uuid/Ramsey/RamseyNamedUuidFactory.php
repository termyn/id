<?php

declare(strict_types=1);

namespace Termyn\Uuid\Ramsey;

use Ramsey\Uuid\Uuid as VendorUuid;
use Termyn\Uuid;
use Termyn\Uuid\NamedUuidFactory;

final class RamseyNamedUuidFactory implements NamedUuidFactory
{
    public function create(Uuid $namespace, string $name): Uuid
    {
        return new RamseyUuid(
            VendorUuid::uuid5($namespace->toString(), $name)
        );
    }
}
