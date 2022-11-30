<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPw;
use PHPUnit\Framework\TestCase;

class TerritoryPwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPw();

        self::assertSame('PW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
