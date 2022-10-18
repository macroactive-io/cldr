<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGoth class
 *
 * @coversNothing
 */
class ScriptGothTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGoth();

        self::assertSame('Goth', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('206', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Gothic', $script->unicodeName());
    }
}
