<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the TerritoryMf class
 *
 * @coversNothing
 */
class TerritoryMfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new TerritoryMf();

        self::assertSame('MF', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
