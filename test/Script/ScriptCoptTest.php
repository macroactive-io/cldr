<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCopt class
 *
 * @coversNothing
 */
class ScriptCoptTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCopt();

        self::assertSame('Copt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('204', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Coptic', $script->unicodeName());
    }
}
