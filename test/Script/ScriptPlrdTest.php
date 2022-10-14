<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPlrd class
 *
 * @coversNothing
 */
class ScriptPlrdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPlrd();

        self::assertSame('Plrd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('282', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Miao', $script->unicodeName());
    }
}
