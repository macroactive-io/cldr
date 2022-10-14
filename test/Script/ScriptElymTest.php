<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElymTest class
 *
 * @coversNothing
 */
class ScriptElymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptElym();

        self::assertSame('Elym', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('128', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Elymaic', $script->unicodeName());
    }
}
