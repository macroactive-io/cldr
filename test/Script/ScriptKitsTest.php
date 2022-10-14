<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKits class
 *
 * @coversNothing
 */
class ScriptKitsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKits();

        self::assertSame('Kits', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('288', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Khitan_Small_Script', $script->unicodeName());
    }
}
