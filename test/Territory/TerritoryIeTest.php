<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIe;
use PHPUnit\Framework\TestCase;

class TerritoryIeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIe();

        self::assertSame('IE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
