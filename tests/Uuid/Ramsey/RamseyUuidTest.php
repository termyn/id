<?php

declare(strict_types=1);

namespace Termyn\Tests\Uuid\Ramsey;

use PHPUnit\Framework\TestCase;
use Termyn\Test\Uuid\FakeUuids;
use Termyn\Uuid\Ramsey\RamseyUuid;

final class RamseyUuidTest extends TestCase
{
    public function testItCreatesValidRandomUuid(): void
    {
        $uuid = RamseyUuid::random();

        $this->assertInstanceOf(RamseyUuid::class, $uuid);
    }

    public function testItCreatesValidUuidFromString(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuids::PRIMARY);

        $this->assertSame(FakeUuids::PRIMARY, $uuid->toString());
    }

    public function testItEqualsUuids(): void
    {
        $firstUuid = RamseyUuid::fromString(FakeUuids::PRIMARY);

        $this->assertTrue(
            $firstUuid->equals($firstUuid)
        );
    }

    public function testItNotEqualsUuids(): void
    {
        $firstUuid = RamseyUuid::fromString(FakeUuids::PRIMARY);
        $secondUuid = RamseyUuid::fromString(FakeUuids::SECONDARY);

        $this->assertFalse(
            $firstUuid->equals($secondUuid)
        );
    }

    public function testItReturnsNameBasedUuid(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuids::PRIMARY);

        $derivedUuid = $uuid->toNameBased(FakeUuids::SECONDARY);

        $this->assertSame(FakeUuids::NAME_BASED, $derivedUuid->toString());
    }

    public function testItReturnsValidString(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuids::PRIMARY);

        $this->assertSame(FakeUuids::PRIMARY, $uuid->toString());
        $this->assertSame(FakeUuids::PRIMARY, $uuid->__toString());
    }

    public function testItCreatesValidUuidFromBinary(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuids::PRIMARY);
        $uuid = RamseyUuid::fromBinary($uuid->toBinary());

        $this->assertSame(FakeUuids::PRIMARY, $uuid->toString());
    }
}
