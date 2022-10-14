<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCyrl class
 *
 * @coversNothing
 */
class ScriptCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCyrl();

        self::assertSame('Cyrl', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('220', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cyrillic', $script->unicodeName());
    }
}
