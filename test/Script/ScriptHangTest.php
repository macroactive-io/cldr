<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHang class
 *
 * @coversNothing
 */
class ScriptHangTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHang();

        self::assertSame('Hang', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('286', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Hangul', $script->unicodeName());
    }
}
