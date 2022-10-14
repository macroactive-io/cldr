<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHatr class
 *
 * @coversNothing
 */
class ScriptHatrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHatr();

        self::assertSame('Hatr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('127', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hatran', $script->unicodeName());
    }
}
