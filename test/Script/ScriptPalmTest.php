<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPalm class
 *
 * @coversNothing
 */
class ScriptPalmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPalm();

        self::assertSame('Palm', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('126', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Palmyrene', $script->unicodeName());
    }
}
