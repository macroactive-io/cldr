<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAdlm class
 *
 * @coversNothing
 */
class ScriptAdlmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAdlm();

        self::assertSame('Adlm', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('166', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Adlam', $script->unicodeName());
    }
}
