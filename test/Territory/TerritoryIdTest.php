<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

class TerritoryIdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryId();

        self::assertSame('ID', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
