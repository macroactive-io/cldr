<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTeng class
 *
 * @coversNothing
 */
class ScriptTengTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTeng();

        self::assertSame('Teng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('290', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
