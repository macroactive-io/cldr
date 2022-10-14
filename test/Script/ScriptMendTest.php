<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMend class
 *
 * @coversNothing
 */
class ScriptMendTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMend();

        self::assertSame('Mend', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('438', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mende_Kikakui', $script->unicodeName());
    }
}
