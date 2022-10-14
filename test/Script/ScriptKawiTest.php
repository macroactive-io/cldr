<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKawi class
 *
 * @coversNothing
 */
class ScriptKawiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKawi();

        self::assertSame('Kawi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('368', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
