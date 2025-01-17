<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIl;
use PHPUnit\Framework\TestCase;

class TerritoryIlTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIl();

        self::assertSame('IL', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
