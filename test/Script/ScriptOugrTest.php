<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOugr class
 *
 * @coversNothing
 */
class ScriptOugrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOugr();

        self::assertSame('Ougr', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('143', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Uyghur', $script->unicodeName());
    }
}
