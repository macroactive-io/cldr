<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryGg class
 *
 * @coversNothing
 */
class TerritoryGgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritoryGg();

        self::assertSame('GG', $territory->code());
    }
}
