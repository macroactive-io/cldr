<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAghb class
 *
 * @coversNothing
 */
class ScriptAghbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAghb();

        self::assertSame('Aghb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('239', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Caucasian_Albanian', $script->unicodeName());
    }
}
