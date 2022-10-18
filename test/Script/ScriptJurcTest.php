<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptJurc class
 *
 * @coversNothing
 */
class ScriptJurcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptJurc();

        self::assertSame('Jurc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('510', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
