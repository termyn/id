<?php

declare(strict_types=1);

namespace Termyn\Test\Uuid\Ramsey;

use PHPUnit\Framework\TestCase;
use Termyn\Test\Uuid\FakeUuids;
use Termyn\Uuid\Ramsey\RamseyUuid;
use Termyn\Uuid\Ramsey\RamseyUuidFactory;

final class RamseyUuidFactoryTest extends TestCase
{
    public function testItCreatesValidUuid(): void
    {
        $factory = new RamseyUuidFactory();

        $static = RamseyUuid::fromString(FakeUuids::PRIMARY);
        $factored = $factory->create(FakeUuids::PRIMARY);

        $this->assertTrue(
            $static->equals($factored)
        );
    }
}
