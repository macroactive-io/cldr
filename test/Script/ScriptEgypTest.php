<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEgyp class
 *
 * @coversNothing
 */
class ScriptEgypTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptEgyp();

        self::assertSame('Egyp', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('050', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Egyptian_Hieroglyphs', $script->unicodeName());
    }
}
