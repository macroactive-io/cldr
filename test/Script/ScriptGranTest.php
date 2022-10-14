<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGran class
 *
 * @coversNothing
 */
class ScriptGranTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGran();

        self::assertSame('Gran', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('343', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Grantha', $script->unicodeName());
    }
}
