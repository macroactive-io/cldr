<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryHm;
use PHPUnit\Framework\TestCase;

class TerritoryHmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryHm();

        self::assertSame('HM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
