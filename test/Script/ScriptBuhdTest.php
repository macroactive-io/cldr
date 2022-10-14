<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBuhd class
 *
 * @coversNothing
 */
class ScriptBuhdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBuhd();

        self::assertSame('Buhd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('372', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Buhid', $script->unicodeName());
    }
}
