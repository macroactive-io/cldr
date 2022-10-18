<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZanb class
 *
 * @coversNothing
 */
class ScriptZanbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZanb();

        self::assertSame('Zanb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('339', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Zanabazar_Square', $script->unicodeName());
    }
}
