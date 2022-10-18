<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPcun class
 *
 * @coversNothing
 */
class ScriptPcunTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPcun();

        self::assertSame('Pcun', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('015', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
