<?php

declare(strict_types=1);

namespace Termyn\Id\Tests\Uuid\Symfony;

use PHPUnit\Framework\TestCase;
use Termyn\Test\Uuid\FakeUuids;
use Termyn\Uuid\Symfony\SymfonyUuid;
use Termyn\Uuid\Symfony\SymfonyUuidFactory;

final class SymfonyUuidFactoryTest extends TestCase
{
    public function testItCreatesValidUuid(): void
    {
        $factory = new SymfonyUuidFactory();

        $static = SymfonyUuid::fromString(FakeUuids::PRIMARY);
        $factored = $factory->create(FakeUuids::PRIMARY);

        $this->assertTrue(
            $static->equals($factored)
        );
    }
}
