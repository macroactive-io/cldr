<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHira class
 *
 * @coversNothing
 */
class ScriptHiraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHira();

        self::assertSame('Hira', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('410', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hiragana', $script->unicodeName());
    }
}
