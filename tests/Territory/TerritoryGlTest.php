<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGl;
use PHPUnit\Framework\TestCase;

class TerritoryGlTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGl();

        self::assertSame('GL', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
