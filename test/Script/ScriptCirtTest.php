<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCirt class
 *
 * @coversNothing
 */
class ScriptCirtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCirt();

        self::assertSame('Cirt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('291', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
