<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptYiii class
 *
 * @coversNothing
 */
class ScriptYiiiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptYiii();

        self::assertSame('Yiii', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('460', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Yi', $script->unicodeName());
    }
}
