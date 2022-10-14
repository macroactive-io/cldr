<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLyci class
 *
 * @coversNothing
 */
class ScriptLyciTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLyci();

        self::assertSame('Lyci', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('202', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Lycian', $script->unicodeName());
    }
}
