<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBlis class
 *
 * @coversNothing
 */
class ScriptBlisTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBlis();

        self::assertSame('Blis', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('550', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
