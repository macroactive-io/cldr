<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZinh class
 *
 * @coversNothing
 */
class ScriptZinhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZinh();

        self::assertSame('Zinh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('994', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Inherited', $script->unicodeName());
    }
}
