<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGonmTest class
 *
 * @coversNothing
 */
class ScriptGonmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGonm();

        self::assertSame('Gonm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('313', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Masaram_Gondi', $script->unicodeName());
    }
}
