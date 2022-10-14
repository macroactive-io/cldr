<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Variant;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the VariantPosix class
 *
 * @coversNothing
 */
class VariantPosixTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $variant = new VariantPosix();

        self::assertSame('posix', $variant->code());
    }
}
