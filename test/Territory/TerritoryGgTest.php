<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGg;
use PHPUnit\Framework\TestCase;

class TerritoryGgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGg();

        self::assertSame('GG', $territory->code());
    }
}
