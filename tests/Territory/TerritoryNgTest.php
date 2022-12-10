<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNg;
use PHPUnit\Framework\TestCase;

class TerritoryNgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNg();

        self::assertSame('NG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}