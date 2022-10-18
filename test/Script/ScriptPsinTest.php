<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPsin class
 *
 * @coversNothing
 */
class ScriptPsinTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPsin();

        self::assertSame('Psin', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('103', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
