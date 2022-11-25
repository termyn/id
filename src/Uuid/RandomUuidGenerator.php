<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid;

use Termyn\Identifier\Uuid;

interface RandomUuidGenerator
{
    public function generate(): Uuid;
}
