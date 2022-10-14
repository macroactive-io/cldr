<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the Territory013 class
 *
 * @coversNothing
 */
class Territory013Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $territory = new Territory013();

        self::assertSame('013', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
