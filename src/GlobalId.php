<?php

declare(strict_types=1);

namespace Termyn;

interface GlobalId extends Id
{
    public function associate(int|string $order): LocalId;
}
