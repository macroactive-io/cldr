<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArab class
 *
 * @coversNothing
 */
class ScriptHebrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHebr();

        self::assertSame('Hebr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('125', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hebrew', $script->unicodeName());
    }
}
