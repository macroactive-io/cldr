<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCpmnTest class
 *
 * @coversNothing
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
        self::assertSame([], $script->numerals());
        self::assertSame('Cypro_Minoan', $script->unicodeName());
    }
}
