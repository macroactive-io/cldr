<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZsym class
 *
 * @coversNothing
 */
class ScriptZsymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZsym();

        self::assertSame('Zsym', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('996', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
