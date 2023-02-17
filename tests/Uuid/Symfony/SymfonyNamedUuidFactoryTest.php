<?php

declare(strict_types=1);

namespace Termyn\Tests\Uuid\Symfony;

use PHPUnit\Framework\TestCase;
use Termyn\Test\Uuid\FakeUuids;
use Termyn\Uuid\Symfony\SymfonyNamedUuidFactory;
use Termyn\Uuid\Symfony\SymfonyUuid;

final class SymfonyNamedUuidFactoryTest extends TestCase
{
    public function testItCreatesValidUuid(): void
    {
        $factory = new SymfonyNamedUuidFactory();

        $static = SymfonyUuid::fromString(FakeUuids::PRIMARY);
        $static = $static->toNameBased(FakeUuids::SECONDARY);

        $factored = $factory->create(
            namespace: SymfonyUuid::fromString(FakeUuids::PRIMARY),
            name: FakeUuids::SECONDARY,
        );

        $this->assertTrue(
            $static->equals($factored)
        );
    }
}
