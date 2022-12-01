<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIm;
use PHPUnit\Framework\TestCase;

class TerritoryImTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIm();

        self::assertSame('IM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
