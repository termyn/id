<?php

declare(strict_types=1);

namespace Termyn\Identifier\Test\Uuid;

use PHPUnit\Framework\TestCase;
use Termyn\Identifier\Uuid;
use Termyn\Identifier\Uuid\RegexUuidValidator;

final class RegexUuidValidatorTest extends TestCase
{
    public function testItReturnsTrueIfUuidIsValid(): void
    {
        $validator = new RegexUuidValidator();

        $this->assertTrue(
            $validator->validate(FakeUuid::PRIMARY)
        );
    }

    public function testItReturnsTrueIfUuidIsNil(): void
    {
        $validator = new RegexUuidValidator();

        $this->assertTrue(
            $validator->validate(Uuid::NIL)
        );
    }

    public function testItReturnsFalseIfUuidIsInvalid(): void
    {
        $validator = new RegexUuidValidator();

        $this->assertFalse(
            $validator->validate(FakeUuid::INVALID)
        );
    }
}
