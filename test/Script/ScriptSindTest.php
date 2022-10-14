<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSind class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSindTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSind();

        self::assertSame('Sind', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('318', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Khudawadi', $script->unicodeName());
    }
}
