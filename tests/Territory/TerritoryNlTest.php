<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNl;
use PHPUnit\Framework\TestCase;

class TerritoryNlTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNl();

        self::assertSame('NL', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
