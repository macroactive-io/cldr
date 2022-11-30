<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGp;
use PHPUnit\Framework\TestCase;

class TerritoryGpTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGp();

        self::assertSame('GP', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
