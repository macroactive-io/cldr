<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTglg class
 *
 * @coversNothing
 */
class ScriptTglgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTglg();

        self::assertSame('Tglg', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('370', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tagalog', $script->unicodeName());
    }
}
