<?php

namespace Fisharebest\Localization\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryMw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryMwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritoryMw();

        self::assertSame('MW', $territory->code());
        self::assertSame(0, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
