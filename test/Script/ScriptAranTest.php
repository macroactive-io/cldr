<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAdlm class
 *
 * @coversNothing
 */
class ScriptAranTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAran();

        self::assertSame('Aran', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('161', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
