<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDiak class
 *
 * @coversNothing
 */
class ScriptDiakTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptDiak();

        self::assertSame('Diak', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('342', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Dives_Akuru', $script->unicodeName());
    }
}
