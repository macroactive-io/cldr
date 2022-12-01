<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAt;
use PHPUnit\Framework\TestCase;

class TerritoryAtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAt();

        self::assertSame('AT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
