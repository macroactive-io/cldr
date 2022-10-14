<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBatk class
 *
 * @coversNothing
 */
class ScriptBatkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBatk();

        self::assertSame('Batk', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('365', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Batak', $script->unicodeName());
    }
}
