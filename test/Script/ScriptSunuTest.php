<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSunu class
 *
 * @coversNothing
 */
class ScriptSunuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSunu();

        self::assertSame('Sunu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('274', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
