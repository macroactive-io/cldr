<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOrya class
 *
 * @coversNothing
 */
class ScriptOryaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOrya();

        self::assertSame('Orya', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('327', $script->number());
        self::assertSame(['୦', '୧', '୨', '୩', '୪', '୫', '୬', '୭', '୮', '୯'], $script->numerals());
        self::assertSame('Oriya', $script->unicodeName());
    }
}
