<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBugi class
 *
 * @coversNothing
 */
class ScriptBugiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBugi();

        self::assertSame('Bugi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('367', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Buginese', $script->unicodeName());
    }
}
