<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCpmnTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCpmnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCpmn();

        self::assertSame('Cpmn', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('402', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Cypro_Minoan', $script->unicodeName());
    }
}
