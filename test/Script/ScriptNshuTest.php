<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNshu class
 *
 * @coversNothing
 */
class ScriptNshuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNshu();

        self::assertSame('Nshu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('499', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nushu', $script->unicodeName());
    }
}
