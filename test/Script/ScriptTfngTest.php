<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTfng class
 *
 * @coversNothing
 */
class ScriptTfngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTfng();

        self::assertSame('Tfng', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('120', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tifinagh', $script->unicodeName());
    }
}
