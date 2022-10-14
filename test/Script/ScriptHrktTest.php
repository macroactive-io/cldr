<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHrkt class
 *
 * @coversNothing
 */
class ScriptHrktTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHrkt();

        self::assertSame('Hrkt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('412', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Katakana_Or_Hiragana', $script->unicodeName());
    }
}
