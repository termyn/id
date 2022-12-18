<?php

declare(strict_types=1);

namespace Termyn\Uuid;

interface UuidValidator
{
    public function validate(string $uuid): bool;
}
