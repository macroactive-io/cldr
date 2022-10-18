<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSogo class
 *
 * @coversNothing
 */
class ScriptSogoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSogo();

        self::assertSame('Sogo', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('142', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Sogdian', $script->unicodeName());
    }
}
