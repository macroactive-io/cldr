<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRunr class
 *
 * @coversNothing
 */
class ScriptRunrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptRunr();

        self::assertSame('Runr', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('211', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Runic', $script->unicodeName());
    }
}
