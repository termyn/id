<?php

declare(strict_types=1);

namespace Termyn\Uuid;

use Termyn\Uuid;

interface UuidNamedFactory
{
    public function create(Uuid $namespace, string $name): Uuid;
}
