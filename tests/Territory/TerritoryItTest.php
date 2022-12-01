<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIt;
use PHPUnit\Framework\TestCase;

class TerritoryItTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIt();

        self::assertSame('IT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
