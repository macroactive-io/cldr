<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhlp class
 *
 * @coversNothing
 */
class ScriptPhlpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPhlp();

        self::assertSame('Phlp', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('132', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Psalter_Pahlavi', $script->unicodeName());
    }
}
