<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory057;
use PHPUnit\Framework\TestCase;

class Territory057Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory057();

        self::assertSame('057', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
