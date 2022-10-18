<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTnsa class
 *
 * @coversNothing
 */
class ScriptTnsaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTnsa();

        self::assertSame('Tnsa', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('275', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tangsa', $script->unicodeName());
    }
}
