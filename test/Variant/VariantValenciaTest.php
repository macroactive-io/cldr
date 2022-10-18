<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Variant;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantValencia class
 *
 * @coversNothing
 */
class VariantValenciaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $variant = new VariantValencia();

        self::assertSame('valencia', $variant->code());
    }
}
