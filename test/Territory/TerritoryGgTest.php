<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

class TerritoryGgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGg();

        self::assertSame('GG', $territory->code());
    }
}
