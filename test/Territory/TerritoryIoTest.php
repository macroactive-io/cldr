<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIo;
use PHPUnit\Framework\TestCase;

class TerritoryIoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIo();

        self::assertSame('IO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
