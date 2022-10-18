<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSamr class
 *
 * @coversNothing
 */
class ScriptSamrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSamr();

        self::assertSame('Samr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('123', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Samaritan', $script->unicodeName());
    }
}
