<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid;

use Termyn\Identifier\Uuid;

interface NamedUuidFactory
{
    public function create(Uuid $namespace, string $name): Uuid;
}
