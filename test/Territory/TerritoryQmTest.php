<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryQm;
use PHPUnit\Framework\TestCase;

class TerritoryQmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryQm();

        self::assertSame('QM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
