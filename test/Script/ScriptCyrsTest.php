<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCyrs class
 *
 * @coversNothing
 */
class ScriptCyrsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCyrs();

        self::assertSame('Cyrs', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('221', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
