<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLydi class
 *
 * @coversNothing
 */
class ScriptLydiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLydi();

        self::assertSame('Lydi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('116', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Lydian', $script->unicodeName());
    }
}
