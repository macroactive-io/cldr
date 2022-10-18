<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEgyh class
 *
 * @coversNothing
 */
class ScriptEgyhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptEgyh();

        self::assertSame('Egyh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('060', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
