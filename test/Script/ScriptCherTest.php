<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCher class
 *
 * @coversNothing
 */
class ScriptCherTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCher();

        self::assertSame('Cher', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('445', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Cherokee', $script->unicodeName());
    }
}
