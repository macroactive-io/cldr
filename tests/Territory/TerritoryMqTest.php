<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMq;
use PHPUnit\Framework\TestCase;

class TerritoryMqTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMq();

        self::assertSame('MQ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
