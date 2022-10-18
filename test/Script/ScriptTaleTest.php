<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTale class
 *
 * @coversNothing
 */
class ScriptTaleTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTale();

        self::assertSame('Tale', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('353', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tai_Le', $script->unicodeName());
    }
}
