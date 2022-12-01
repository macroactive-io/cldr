<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAi;
use PHPUnit\Framework\TestCase;

class TerritoryAiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAi();

        self::assertSame('AI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
