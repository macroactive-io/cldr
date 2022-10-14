<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTaml class
 *
 * @coversNothing
 */
class ScriptTamlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTaml();

        self::assertSame('Taml', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('346', $script->number());
        self::assertSame(['௦', '௧', '௨', '௩', '௪', '௫', '௬', '௭', '௮', '௯'], $script->numerals());
        self::assertSame('Tamil', $script->unicodeName());
    }
}
