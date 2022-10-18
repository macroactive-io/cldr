<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBass class
 *
 * @coversNothing
 */
class ScriptBassTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBass();

        self::assertSame('Bass', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('259', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bassa_Vah', $script->unicodeName());
    }
}
