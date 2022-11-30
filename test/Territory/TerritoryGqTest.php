<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGq;
use PHPUnit\Framework\TestCase;

class TerritoryGqTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGq();

        self::assertSame('GQ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
