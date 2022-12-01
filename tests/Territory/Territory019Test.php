<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\Territory019;
use PHPUnit\Framework\TestCase;

class Territory019Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory019();

        self::assertSame('019', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
