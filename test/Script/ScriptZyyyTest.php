<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZyyy class
 *
 * @coversNothing
 */
class ScriptZyyyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZyyy();

        self::assertSame('Zyyy', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('998', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Common', $script->unicodeName());
    }
}
