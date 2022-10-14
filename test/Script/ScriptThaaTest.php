<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptThaa class
 *
 * @coversNothing
 */
class ScriptThaaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptThaa();

        self::assertSame('Thaa', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('170', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Thaana', $script->unicodeName());
    }
}
