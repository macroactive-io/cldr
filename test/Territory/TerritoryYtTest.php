<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryYt;
use PHPUnit\Framework\TestCase;

class TerritoryYtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryYt();

        self::assertSame('YT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
