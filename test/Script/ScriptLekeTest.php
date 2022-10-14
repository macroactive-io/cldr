<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLeke class
 *
 * @coversNothing
 */
class ScriptLekeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLeke();

        self::assertSame('Leke', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('364', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
