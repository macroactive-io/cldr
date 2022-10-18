<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNand class
 *
 * @coversNothing
 */
class ScriptNandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNand();

        self::assertSame('Nand', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('311', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nandinagari', $script->unicodeName());
    }
}
