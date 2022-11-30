<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNp;
use PHPUnit\Framework\TestCase;

class TerritoryNpTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNp();

        self::assertSame('NP', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
