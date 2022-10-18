<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptItal class
 *
 * @coversNothing
 */
class ScriptItalTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptItal();

        self::assertSame('Ital', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('210', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Italic', $script->unicodeName());
    }
}
