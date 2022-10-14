<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhoj class
 *
 * @coversNothing
 */
class ScriptKhojTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKhoj();

        self::assertSame('Khoj', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('322', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Khojki', $script->unicodeName());
    }
}
