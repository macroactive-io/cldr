<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCham class
 *
 * @coversNothing
 */
class ScriptChamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCham();

        self::assertSame('Cham', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('358', $script->number());
        self::assertSame(['꩐', '꩑', '꩒', '꩓', '꩔', '꩕', '꩖', '꩗', '꩘', '꩙'], $script->numerals());
        self::assertSame('Cham', $script->unicodeName());
    }
}
