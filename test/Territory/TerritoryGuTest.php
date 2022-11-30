<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGu;
use PHPUnit\Framework\TestCase;

class TerritoryGuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGu();

        self::assertSame('GU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
