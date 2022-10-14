<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLimb class
 *
 * @coversNothing
 */
class ScriptLimbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLimb();

        self::assertSame('Limb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('336', $script->number());
        self::assertSame(['᥆', '᥇', '᥈', '᥉', '᥊', '᥋', '᥌', '᥍', '᥎', '᥏'], $script->numerals());
        self::assertSame('Limbu', $script->unicodeName());
    }
}
