<?php

declare(strict_types=1);

namespace Termyn\Test\Uuid\Symfony;

use PHPUnit\Framework\TestCase;
use Termyn\Test\Uuid\FakeUuids;
use Termyn\Uuid\Symfony\SymfonyUuid;

final class SymfonyUuidTest extends TestCase
{
    public function testItCreatesValidRandomUuid(): void
    {
        $uuid = SymfonyUuid::random();

        $this->assertInstanceOf(SymfonyUuid::class, $uuid);
    }

    public function testItCreatesValidUuidFromString(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuids::PRIMARY);

        $this->assertSame(FakeUuids::PRIMARY, $uuid->toString());
    }

    public function testItEqualsUuids(): void
    {
        $firstUuid = SymfonyUuid::fromString(FakeUuids::PRIMARY);

        $this->assertTrue(
            $firstUuid->equals($firstUuid)
        );
    }

    public function testItNotEqualsUuids(): void
    {
        $firstUuid = SymfonyUuid::fromString(FakeUuids::PRIMARY);
        $secondUuid = SymfonyUuid::fromString(FakeUuids::SECONDARY);

        $this->assertFalse(
            $firstUuid->equals($secondUuid)
        );
    }

    public function testItReturnsNameBasedUuid(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuids::PRIMARY);

        $derivedUuid = $uuid->toNameBased(FakeUuids::SECONDARY);

        $this->assertSame(FakeUuids::NAME_BASED, $derivedUuid->toString());
    }

    public function testItReturnsValidString(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuids::PRIMARY);

        $this->assertSame(FakeUuids::PRIMARY, $uuid->toString());
        $this->assertSame(FakeUuids::PRIMARY, $uuid->jsonSerialize());
        $this->assertSame(FakeUuids::PRIMARY, $uuid->__toString());
    }

    public function testItCreatesValidUuidFromBinary(): void
    {
        $uuid = SymfonyUuid::fromString(FakeUuids::PRIMARY);
        $uuid = SymfonyUuid::fromBinary($uuid->toBinary());

        $this->assertSame(FakeUuids::PRIMARY, $uuid->toString());
    }
}
