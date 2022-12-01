<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryJm;
use PHPUnit\Framework\TestCase;

class TerritoryJmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryJm();

        self::assertSame('JM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
