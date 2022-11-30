<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAs;
use PHPUnit\Framework\TestCase;

class TerritoryAsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAs();

        self::assertSame('AS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
