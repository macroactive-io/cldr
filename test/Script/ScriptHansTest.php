<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHans class
 *
 * @coversNothing
 */
class ScriptHansTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHans();

        self::assertSame('Hans', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('501', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
