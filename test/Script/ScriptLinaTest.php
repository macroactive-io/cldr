<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLina class
 *
 * @coversNothing
 */
class ScriptLinaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLina();

        self::assertSame('Lina', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('400', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Linear_A', $script->unicodeName());
    }
}
