<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGujr class
 *
 * @coversNothing
 */
class ScriptGujrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGujr();

        self::assertSame('Gujr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('320', $script->number());
        self::assertSame(['૦', '૧', '૨', '૩', '૪', '૫', '૬', '૭', '૮', '૯'], $script->numerals());
        self::assertSame('Gujarati', $script->unicodeName());
    }
}
