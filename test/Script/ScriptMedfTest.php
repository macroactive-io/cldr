<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMedfTest class
 *
 * @coversNothing
 */
class ScriptMedfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMedf();

        self::assertSame('Medf', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('265', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Medefaidrin', $script->unicodeName());
    }
}
