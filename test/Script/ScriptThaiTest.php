<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptThai class
 *
 * @coversNothing
 */
class ScriptThaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptThai();

        self::assertSame('Thai', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('352', $script->number());
        self::assertSame(['๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'], $script->numerals());
        self::assertSame('Thai', $script->unicodeName());
    }
}
