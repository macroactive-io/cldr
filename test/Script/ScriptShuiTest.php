<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptShui class
 *
 * @coversNothing
 */
class ScriptShuiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptShui();

        self::assertSame('Shui', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('530', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
