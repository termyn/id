<?php

declare(strict_types=1);

namespace Termyn\Identifier;

interface Gid extends Id
{
    public function associate(int|string $order): Lid;
}
