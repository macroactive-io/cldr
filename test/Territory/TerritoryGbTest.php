<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryGb;

class TerritoryGbTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGb();

        self::assertSame('GB', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('UK', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
