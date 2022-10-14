<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhnx class
 *
 * @coversNothing
 */
class ScriptPhnxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPhnx();

        self::assertSame('Phnx', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('115', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Phoenician', $script->unicodeName());
    }
}
