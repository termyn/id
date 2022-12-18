<?php

declare(strict_types=1);

namespace Termyn;

use Stringable;

interface Id extends Stringable
{
    public function equals(self $that): bool;
}
