<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMm;
use PHPUnit\Framework\TestCase;

class TerritoryMmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMm();

        self::assertSame('MM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('UK', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
