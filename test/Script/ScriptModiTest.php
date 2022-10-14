<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptModi class
 *
 * @coversNothing
 */
class ScriptModiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptModi();

        self::assertSame('Modi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('324', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Modi', $script->unicodeName());
    }
}
