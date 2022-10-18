<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNagm class
 *
 * @coversNothing
 */
class ScriptNagmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNagm();

        self::assertSame('Nagm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('295', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
