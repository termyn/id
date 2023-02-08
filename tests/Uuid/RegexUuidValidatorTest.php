<?php

declare(strict_types=1);

namespace Termyn\Test\Uuid;

use PHPUnit\Framework\TestCase;
use Termyn\Uuid;
use Termyn\Uuid\RegexUuidValidator;

final class RegexUuidValidatorTest extends TestCase
{
    public function testItReturnsTrueIfUuidIsValid(): void
    {
        $validator = new RegexUuidValidator();

        $this->assertTrue(
            $validator->validate(FakeUuids::PRIMARY)
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
            $validator->validate(FakeUuids::INVALID)
        );
    }
}
