<?php

declare(strict_types=1);

namespace Termyn\Uuid;

use Termyn\Uuid;

interface UuidFactory
{
    public function create(Uuid $namespace, string $name): Uuid;
}
