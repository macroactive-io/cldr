<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptWara class
 *
 * @coversNothing
 */
class ScriptWaraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptWara();

        self::assertSame('Wara', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('262', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Warang_Citi', $script->unicodeName());
    }
}
