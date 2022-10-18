<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSyrn class
 *
 * @coversNothing
 */
class ScriptSyrnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSyrn();

        self::assertSame('Syrn', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('136', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
