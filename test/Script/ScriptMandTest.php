<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMand class
 *
 * @coversNothing
 */
class ScriptMandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMand();

        self::assertSame('Mand', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('140', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mandaic', $script->unicodeName());
    }
}
