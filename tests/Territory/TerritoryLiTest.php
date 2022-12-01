<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLi;
use PHPUnit\Framework\TestCase;

class TerritoryLiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLi();

        self::assertSame('LI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
