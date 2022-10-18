<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKore class
 *
 * @coversNothing
 */
class ScriptKoreTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKore();

        self::assertSame('Kore', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('287', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
