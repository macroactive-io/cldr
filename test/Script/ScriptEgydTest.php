<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEgyd class
 *
 * @coversNothing
 */
class ScriptEgydTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptEgyd();

        self::assertSame('Egyd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('070', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
