<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIq;
use PHPUnit\Framework\TestCase;

class TerritoryIqTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIq();

        self::assertSame('IQ', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
