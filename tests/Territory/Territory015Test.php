<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory015;
use PHPUnit\Framework\TestCase;

class Territory015Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory015();

        self::assertSame('015', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
