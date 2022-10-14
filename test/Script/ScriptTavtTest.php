<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTavt class
 *
 * @coversNothing
 */
class ScriptTavtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTavt();

        self::assertSame('Tavt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('359', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tai_Viet', $script->unicodeName());
    }
}
