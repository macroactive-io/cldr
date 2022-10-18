<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhlv class
 *
 * @coversNothing
 */
class ScriptPhlvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPhlv();

        self::assertSame('Phlv', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('133', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
