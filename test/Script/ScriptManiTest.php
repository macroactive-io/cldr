<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMani class
 *
 * @coversNothing
 */
class ScriptManiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMani();

        self::assertSame('Mani', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('139', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Manichaean', $script->unicodeName());
    }
}
