<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPg;
use PHPUnit\Framework\TestCase;

class TerritoryPgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPg();

        self::assertSame('PG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
