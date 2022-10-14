<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNkoo class
 *
 * @coversNothing
 */
class ScriptNkooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNkoo();

        self::assertSame('Nkoo', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('165', $script->number());
        self::assertSame(['߀', '߁', '߂', '߃', '߄', '߅', '߆', '߇', '߈', '߉'], $script->numerals());
        self::assertSame('Nko', $script->unicodeName());
    }
}
