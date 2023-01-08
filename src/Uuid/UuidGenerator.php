<?php

declare(strict_types=1);

namespace Termyn\Uuid;

use Termyn\Uuid;

interface UuidGenerator
{
    public function generate(): Uuid;
}
