<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptXsux class
 *
 * @coversNothing
 */
class ScriptXsuxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptXsux();

        self::assertSame('Xsux', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('020', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cuneiform', $script->unicodeName());
    }
}
