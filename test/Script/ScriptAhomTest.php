<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAhom class
 *
 * @coversNothing
 */
class ScriptAhomTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAhom();

        self::assertSame('Ahom', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('338', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ahom', $script->unicodeName());
    }
}
