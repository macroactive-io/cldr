<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPauc class
 *
 * @coversNothing
 */
class ScriptPaucTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPauc();

        self::assertSame('Pauc', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('263', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Pau_Cin_Hau', $script->unicodeName());
    }
}
