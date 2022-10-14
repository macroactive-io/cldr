<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGujr class
 *
 * @coversNothing
 */
class ScriptGuruTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGuru();

        self::assertSame('Guru', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('310', $script->number());
        self::assertSame(['੦', '੧', '੨', '੩', '੪', '੫', '੬', '੭', '੮', '੯'], $script->numerals());
        self::assertSame('Gurmukhi', $script->unicodeName());
    }
}
