<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAfak class
 *
 * @coversNothing
 */
class ScriptAfakTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAfak();

        self::assertSame('Afak', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('439', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
