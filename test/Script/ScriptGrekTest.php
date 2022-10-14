<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGrek class
 *
 * @coversNothing
 */
class ScriptGrekTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGrek();

        self::assertSame('Grek', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame([], $script->numerals());
        self::assertSame('Greek', $script->unicodeName());
    }
}
