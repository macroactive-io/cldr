<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMlym class
 *
 * @coversNothing
 */
class ScriptMlymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMlym();

        self::assertSame('Mlym', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('347', $script->number());
        self::assertSame(['൦', '൧', '൨', '൩', '൪', '൫', '൬', '൭', '൮', '൯'], $script->numerals());
        self::assertSame('Malayalam', $script->unicodeName());
    }
}
