<?php

declare(strict_types=1);

namespace Termyn\Test\Uuid\Ramsey;

use PHPUnit\Framework\TestCase;
use Termyn\Test\Uuid\FakeUuids;
use Termyn\Uuid\Ramsey\RamseyNamedUuidFactory;
use Termyn\Uuid\Ramsey\RamseyUuid;

final class RamseyNamedUuidFactoryTest extends TestCase
{
    public function testItCreatesValidUuid(): void
    {
        $factory = new RamseyNamedUuidFactory();

        $static = RamseyUuid::fromString(FakeUuids::PRIMARY);
        $static = $static->toNameBased(FakeUuids::SECONDARY);

        $factored = $factory->create(
            namespace: RamseyUuid::fromString(FakeUuids::PRIMARY),
            name: FakeUuids::SECONDARY,
        );

        $this->assertTrue(
            $static->equals($factored)
        );
    }
}
