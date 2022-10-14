<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTang class
 *
 * @coversNothing
 */
class ScriptTangTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTang();

        self::assertSame('Tang', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('520', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tangut', $script->unicodeName());
    }
}
