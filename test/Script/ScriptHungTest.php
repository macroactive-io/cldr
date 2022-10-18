<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHung class
 *
 * @coversNothing
 */
class ScriptHungTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHung();

        self::assertSame('Hung', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('176', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Hungarian', $script->unicodeName());
    }
}
