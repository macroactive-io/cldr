<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSoyo class
 *
 * @coversNothing
 */
class ScriptSoyoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSoyo();

        self::assertSame('Soyo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('329', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Soyombo', $script->unicodeName());
    }
}
