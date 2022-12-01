<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryVc;
use PHPUnit\Framework\TestCase;

class TerritoryVcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryVc();

        self::assertSame('VC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
