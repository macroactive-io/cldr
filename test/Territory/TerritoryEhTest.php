<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEh;
use PHPUnit\Framework\TestCase;

class TerritoryEhTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEh();

        self::assertSame('EH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
