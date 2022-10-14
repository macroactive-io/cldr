<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptWcho class
 *
 * @coversNothing
 */
class ScriptWchoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptWcho();

        self::assertSame('Wcho', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('283', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Wancho', $script->unicodeName());
    }
}
