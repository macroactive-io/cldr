<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBo;
use PHPUnit\Framework\TestCase;

class TerritoryBoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBo();

        self::assertSame('BO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
