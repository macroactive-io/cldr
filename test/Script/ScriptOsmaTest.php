<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOsma class
 *
 * @coversNothing
 */
class ScriptOsmaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOsma();

        self::assertSame('Osma', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('260', $script->number());
        self::assertSame(['𐒠', '𐒡', '𐒢', '𐒣', '𐒤', '𐒥', '𐒦', '𐒧', '𐒨', '𐒩'], $script->numerals());
        self::assertSame('Osmanya', $script->unicodeName());
    }
}
