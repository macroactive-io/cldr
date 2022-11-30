<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEt;
use PHPUnit\Framework\TestCase;

class TerritoryEtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEt();

        self::assertSame('ET', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
