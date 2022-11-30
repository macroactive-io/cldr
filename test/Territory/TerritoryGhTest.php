<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGh;
use PHPUnit\Framework\TestCase;

class TerritoryGhTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGh();

        self::assertSame('GH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
