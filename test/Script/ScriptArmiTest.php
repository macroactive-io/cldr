<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmi class
 *
 * @coversNothing
 */
class ScriptArmiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptArmi();

        self::assertSame('Armi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('124', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Imperial_Aramaic', $script->unicodeName());
    }
}
