<?php

namespace Tests\Unit;

use Gomzyakov\Validator\INN;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Gomzyakov\Validator\INN
 */
final class INNTest extends TestCase
{
    public function test_create_method(): void
    {
        $number = INN::create('526317984689');

        self::assertTrue($number->isValid());
    }

    public function test_constructor(): void
    {
        $inn = new INN('526317984689');

        self::assertTrue($inn->isValid());
    }

    public function test_incorrect_inn(): void
    {
        $inn = new INN('123');

        self::assertFalse($inn->isValid());
    }
}
