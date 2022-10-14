<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSarb class
 *
 * @coversNothing
 */
class ScriptSarbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSarb();

        self::assertSame('Sarb', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('105', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_South_Arabian', $script->unicodeName());
    }
}
