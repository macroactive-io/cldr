<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHano class
 *
 * @coversNothing
 */
class ScriptHanoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHano();

        self::assertSame('Hano', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('371', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hanunoo', $script->unicodeName());
    }
}
