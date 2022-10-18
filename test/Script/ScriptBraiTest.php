<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBrai class
 *
 * @coversNothing
 */
class ScriptBraiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBrai();

        self::assertSame('Brai', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('570', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Braille', $script->unicodeName());
    }
}
