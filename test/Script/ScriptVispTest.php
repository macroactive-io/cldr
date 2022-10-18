<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptVisp class
 *
 * @coversNothing
 */
class ScriptVispTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptVisp();

        self::assertSame('Visp', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('280', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
