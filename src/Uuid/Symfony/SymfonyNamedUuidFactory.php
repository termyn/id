<?php

declare(strict_types=1);

namespace Termyn\Uuid\Symfony;

use Symfony\Component\Uid\Uuid as VendorUuid;
use Termyn\Uuid;
use Termyn\Uuid\NamedUuidFactory;

final class SymfonyNamedUuidFactory implements NamedUuidFactory
{
    public function create(
        Uuid $namespace,
        string $name
    ): Uuid {
        $namespace = VendorUuid::fromString($namespace->toString());

        return new SymfonyUuid(
            VendorUuid::v5($namespace, $name)
        );
    }
}
