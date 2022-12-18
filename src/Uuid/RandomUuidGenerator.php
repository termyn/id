<?php

declare(strict_types=1);

namespace Termyn\Uuid;

use Termyn\Uuid;

interface RandomUuidGenerator
{
    public function generate(): Uuid;
}
