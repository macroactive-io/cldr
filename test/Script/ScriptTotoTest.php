<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptToto class
 *
 * @coversNothing
 */
class ScriptTotoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptToto();

        self::assertSame('Toto', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('294', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Toto', $script->unicodeName());
    }
}
