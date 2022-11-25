<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid\Symfony;

use Symfony\Component\Uid\Uuid as VendorUuid;
use Termyn\Identifier\Uuid;
use Termyn\Identifier\Uuid\NamedUuidFactory;

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
