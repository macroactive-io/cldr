<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGongTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGongTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGong();

        self::assertSame('Gong', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('312', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Gunjala_Gondi', $script->unicodeName());
    }
}
