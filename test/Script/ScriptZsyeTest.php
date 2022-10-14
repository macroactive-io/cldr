<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZsye class
 *
 * @coversNothing
 */
class ScriptZsyeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZsye();

        self::assertSame('Zsye', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('993', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
