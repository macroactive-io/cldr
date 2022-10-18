<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGeor class
 *
 * @coversNothing
 */
class ScriptGeorTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGeor();

        self::assertSame('Geor', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('240', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Georgian', $script->unicodeName());
    }
}
