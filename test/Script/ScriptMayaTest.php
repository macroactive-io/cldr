<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMaya class
 *
 * @coversNothing
 */
class ScriptMayaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMaya();

        self::assertSame('Maya', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('090', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
