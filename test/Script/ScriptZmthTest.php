<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZmth class
 *
 * @coversNothing
 */
class ScriptZmthTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZmth();

        self::assertSame('Zmth', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('995', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
