<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCans class
 *
 * @coversNothing
 */
class ScriptCansTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCans();

        self::assertSame('Cans', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('440', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Canadian_Aboriginal', $script->unicodeName());
    }
}
