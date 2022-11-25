<?php

declare(strict_types=1);

namespace Termyn\Identifier\Test\Uuid\Symfony;

use PHPUnit\Framework\TestCase;
use Termyn\Identifier\Uuid\Symfony\SymfonyRandomUuidGenerator;
use Termyn\Identifier\Uuid\Symfony\SymfonyUuid;

final class SymfonyRandomUuidGeneratorTest extends TestCase
{
    public function testItGeneratesValidUuid(): void
    {
        $generator = new SymfonyRandomUuidGenerator();

        $uuid = $generator->generate();

        $this->assertInstanceOf(SymfonyUuid::class, $uuid);
    }
}
