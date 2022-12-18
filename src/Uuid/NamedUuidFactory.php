<?php

declare(strict_types=1);

namespace Termyn\Uuid;

use Termyn\Uuid;

interface NamedUuidFactory
{
    public function create(Uuid $namespace, string $name): Uuid;
}
