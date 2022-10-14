<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAvst class
 *
 * @coversNothing
 */
class ScriptAvstTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAvst();

        self::assertSame('Avst', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('134', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Avestan', $script->unicodeName());
    }
}
