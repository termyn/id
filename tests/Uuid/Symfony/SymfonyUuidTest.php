<?php

declare(strict_types=1);

namespace Termyn\Identifier\Test\Uuid\Symfony;

use PHPUnit\Framework\TestCase;
use Termyn\Identifier\Test\Uuid\FakeUuid;
use Termyn\Identifier\Uuid\Symfony\SymfonyUuid;

final class SymfonyUuidTest extends TestCase
{
    public function testItCreatesValidRandomUuid(): void
    {
        $uuid = SymfonyUuid::random();

        $this->assertInstanceOf(SymfonyUuid::class, $uuid);
    }

    public function testItCreatesValidUuidFromString(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuid::PRIMARY);

        $this->assertSame(FakeUuid::PRIMARY, $uuid->toString());
    }

    public function testItEqualsUuids(): void
    {
        $firstUuid = SymfonyUuid::fromString(FakeUuid::PRIMARY);

        $this->assertTrue(
            $firstUuid->equals($firstUuid)
        );
    }

    public function testItNotEqualsUuids(): void
    {
        $firstUuid = SymfonyUuid::fromString(FakeUuid::PRIMARY);
        $secondUuid = SymfonyUuid::fromString(FakeUuid::SECONDARY);

        $this->assertFalse(
            $firstUuid->equals($secondUuid)
        );
    }

    public function testItDerivesUuidBasedOnAnother(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuid::PRIMARY);

        $derivedUuid = $uuid->derive(FakeUuid::SECONDARY);

        $this->assertSame(FakeUuid::DERIVED, $derivedUuid->toString());
    }

    public function testItReturnsValidString(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuid::PRIMARY);

        $this->assertSame(FakeUuid::PRIMARY, $uuid->toString());
        $this->assertSame(FakeUuid::PRIMARY, $uuid->__toString());
    }

    public function testItCreatesValidUuidFromBinary(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuid::PRIMARY);
        $uuid = SymfonyUuid::fromBinary($uuid->toBinary());

        $this->assertSame(FakeUuid::PRIMARY, $uuid->toString());
    }
}
