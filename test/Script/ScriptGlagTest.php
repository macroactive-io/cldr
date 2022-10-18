<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGlag class
 *
 * @coversNothing
 */
class ScriptGlagTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGlag();

        self::assertSame('Glag', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('225', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Glagolitic', $script->unicodeName());
    }
}
