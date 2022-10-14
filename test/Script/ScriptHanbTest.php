<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHanb class
 *
 * @coversNothing
 */
class ScriptHanbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHanb();

        self::assertSame('Hanb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('503', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
