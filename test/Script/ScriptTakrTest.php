<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTakr class
 *
 * @coversNothing
 */
class ScriptTakrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTakr();

        self::assertSame('Takr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('321', $script->number());
        self::assertSame(['𑛀', '𑛁', '𑛂', '𑛃', '𑛄', '𑛅', '𑛆', '𑛇', '𑛈', '𑛉'], $script->numerals());
        self::assertSame('Takri', $script->unicodeName());
    }
}
