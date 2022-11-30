<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMd;
use PHPUnit\Framework\TestCase;

class TerritoryMdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMd();

        self::assertSame('MD', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
