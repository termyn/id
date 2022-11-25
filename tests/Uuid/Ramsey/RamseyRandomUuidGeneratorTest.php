<?php

declare(strict_types=1);

namespace Termyn\Id\Tests\Uuid\Symfony;

use PHPUnit\Framework\TestCase;
use Termyn\Identifier\Uuid\Ramsey\RamseyRandomUuidGenerator;
use Termyn\Identifier\Uuid\Ramsey\RamseyUuid;

final class RamseyRandomUuidGeneratorTest extends TestCase
{
    public function testItGeneratesValidUuid(): void
    {
        $generator = new RamseyRandomUuidGenerator();

        $uuid = $generator->generate();

        $this->assertInstanceOf(RamseyUuid::class, $uuid);
    }
}