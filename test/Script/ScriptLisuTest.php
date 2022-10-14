<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLisu class
 *
 * @coversNothing
 */
class ScriptLisuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLisu();

        self::assertSame('Lisu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('399', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Lisu', $script->unicodeName());
    }
}
