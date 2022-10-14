<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHluw class
 *
 * @coversNothing
 */
class ScriptHluwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHluw();

        self::assertSame('Hluw', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame([], $script->numerals());
        self::assertSame('Anatolian_Hieroglyphs', $script->unicodeName());
    }
}
