<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSinh class
 *
 * @coversNothing
 */
class ScriptSinhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSinh();

        self::assertSame('Sinh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('348', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Sinhala', $script->unicodeName());
    }
}
