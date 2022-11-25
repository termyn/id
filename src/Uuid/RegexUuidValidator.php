<?php

declare(strict_types=1);

namespace Termyn\Identifier\Uuid;

use Termyn\Identifier\Uuid;

final class RegexUuidValidator implements UuidValidator
{
    public function validate(string $uuid): bool
    {
        return $uuid === Uuid::NIL
            || preg_match('{^[0-9a-f]{8}(?:-[0-9a-f]{4}){2}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$}Di', $uuid);
    }
}
