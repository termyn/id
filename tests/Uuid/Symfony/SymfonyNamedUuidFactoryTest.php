<?php

declare(strict_types=1);

namespace Termyn\Id\Tests\Uuid\Symfony;

use PHPUnit\Framework\TestCase;
use Termyn\Identifier\Test\Uuid\FakeUuid;
use Termyn\Identifier\Uuid\Symfony\SymfonyNamedUuidFactory;
use Termyn\Identifier\Uuid\Symfony\SymfonyUuid;

final class SymfonyNamedUuidFactoryTest extends TestCase
{
    public function testItCreatesValidUuid(): void
    {
        $factory = new SymfonyNamedUuidFactory();

        $uuid = $factory->create(
            namespace: SymfonyUuid::fromString(FakeUuid::PRIMARY),
            name: '123',
        );

        $this->assertInstanceOf(SymfonyUuid::class, $uuid);
    }
}
