<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArab class
 *
 * @coversNothing
 */
class ScriptArabTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptArab();

        self::assertSame('Arab', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('160', $script->number());
        self::assertSame(['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'], $script->numerals());
        self::assertSame('Arabic', $script->unicodeName());
    }
}
