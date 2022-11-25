<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid;

interface UuidValidator
{
    public function validate(string $uuid): bool;
}
