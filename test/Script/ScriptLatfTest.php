<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLatf class
 *
 * @coversNothing
 */
class ScriptLatfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLatf();

        self::assertSame('Latf', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('217', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
