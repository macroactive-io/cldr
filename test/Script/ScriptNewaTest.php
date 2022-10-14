<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNewa class
 *
 * @coversNothing
 */
class ScriptNewaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNewa();

        self::assertSame('Newa', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('333', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Newa', $script->unicodeName());
    }
}
