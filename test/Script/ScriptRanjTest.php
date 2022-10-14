<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRanj class
 *
 * @coversNothing
 */
class ScriptRanjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptRanj();

        self::assertSame('Ranj', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('303', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
