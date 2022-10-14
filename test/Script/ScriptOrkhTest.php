<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOrkh class
 *
 * @coversNothing
 */
class ScriptOrkhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOrkh();

        self::assertSame('Orkh', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('175', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Turkic', $script->unicodeName());
    }
}
