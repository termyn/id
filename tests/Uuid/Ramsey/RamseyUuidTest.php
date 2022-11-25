<?php

declare(strict_types=1);

namespace Termyn\Id\Tests\Uuid\Ramsey;

use PHPUnit\Framework\TestCase;
use Termyn\Identifier\Test\Uuid\FakeUuid;
use Termyn\Identifier\Uuid\Ramsey\RamseyUuid;

final class RamseyUuidTest extends TestCase
{
    public function testItCreatesValidRandomUuid(): void
    {
        $uuid = RamseyUuid::random();

        $this->assertInstanceOf(RamseyUuid::class, $uuid);
    }

    public function testItCreatesValidUuidFromString(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuid::PRIMARY);

        $this->assertSame(FakeUuid::PRIMARY, $uuid->toString());
    }

    public function testItEqualsUuids(): void
    {
        $firstUuid = RamseyUuid::fromString(FakeUuid::PRIMARY);

        $this->assertTrue(
            $firstUuid->equals($firstUuid)
        );
    }

    public function testItNotEqualsUuids(): void
    {
        $firstUuid = RamseyUuid::fromString(FakeUuid::PRIMARY);
        $secondUuid = RamseyUuid::fromString(FakeUuid::SECONDARY);

        $this->assertFalse(
            $firstUuid->equals($secondUuid)
        );
    }

    public function testItDerivesUuidBasedOnAnother(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuid::PRIMARY);

        $derivedUuid = $uuid->derive(FakeUuid::SECONDARY);

        $this->assertSame(FakeUuid::DERIVED, $derivedUuid->toString());
    }

    public function testItReturnsValidString(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuid::PRIMARY);

        $this->assertSame(FakeUuid::PRIMARY, $uuid->toString());
        $this->assertSame(FakeUuid::PRIMARY, $uuid->__toString());
    }

    public function testItCreatesValidUuidFromBinary(): void
    {
        $uuid = RamseyUuid::fromString(FakeUuid::PRIMARY);
        $uuid = RamseyUuid::fromBinary($uuid->toBinary());

        $this->assertSame(FakeUuid::PRIMARY, $uuid->toString());
    }
}
