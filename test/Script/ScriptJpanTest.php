<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptJpan class
 *
 * @coversNothing
 */
class ScriptJpanTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptJpan();

        self::assertSame('Jpan', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('413', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
