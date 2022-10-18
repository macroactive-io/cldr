<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMakaTest class
 *
 * @coversNothing
 */
class ScriptMakaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMaka();

        self::assertSame('Maka', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('366', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Makasar', $script->unicodeName());
    }
}
