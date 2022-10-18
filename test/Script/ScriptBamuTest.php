<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBamu class
 *
 * @coversNothing
 */
class ScriptBamuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBamu();

        self::assertSame('Bamu', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('435', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Bamum', $script->unicodeName());
    }
}
