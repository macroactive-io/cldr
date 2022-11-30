<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBj;
use PHPUnit\Framework\TestCase;

class TerritoryBjTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBj();

        self::assertSame('BJ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
