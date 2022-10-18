<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDsrt class
 *
 * @coversNothing
 */
class ScriptDsrtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptDsrt();

        self::assertSame('Dsrt', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('250', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Deseret', $script->unicodeName());
    }
}
