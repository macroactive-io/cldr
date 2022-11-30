<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryWf;
use PHPUnit\Framework\TestCase;

class TerritoryWfTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryWf();

        self::assertSame('WF', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
