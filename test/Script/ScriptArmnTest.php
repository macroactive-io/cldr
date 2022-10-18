<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmn class
 *
 * @coversNothing
 */
class ScriptArmnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptArmn();

        self::assertSame('Armn', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('230', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Armenian', $script->unicodeName());
    }
}
