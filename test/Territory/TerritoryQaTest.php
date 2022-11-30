<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryQa;
use PHPUnit\Framework\TestCase;

class TerritoryQaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryQa();

        self::assertSame('QA', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
