<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptChrs class
 *
 * @coversNothing
 */
class ScriptChrsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptChrs();

        self::assertSame('Chrs', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('109', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Chorasmian', $script->unicodeName());
    }
}
