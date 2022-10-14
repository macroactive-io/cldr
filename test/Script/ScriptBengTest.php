<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBeng class
 *
 * @coversNothing
 */
class ScriptBengTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBeng();

        self::assertSame('Beng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('325', $script->number());
        self::assertSame(['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'], $script->numerals());
        self::assertSame('Bengali', $script->unicodeName());
    }
}
