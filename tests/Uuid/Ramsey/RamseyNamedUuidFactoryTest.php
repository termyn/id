<?php

declare(strict_types=1);

namespace Termyn\Test\Uuid\Ramsey;

use PHPUnit\Framework\TestCase;
use Termyn\Test\Uuid\FakeUuid;
use Termyn\Uuid\Ramsey\RamseyNamedUuidFactory;
use Termyn\Uuid\Ramsey\RamseyUuid;

final class RamseyNamedUuidFactoryTest extends TestCase
{
    public function testItCreatesValidUuid(): void
    {
        $factory = new RamseyNamedUuidFactory();

        $uuid = $factory->create(
            namespace: RamseyUuid::fromString(FakeUuid::PRIMARY),
            name: '123',
        );

        $this->assertInstanceOf(RamseyUuid::class, $uuid);
    }
}
