<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNbat class
 *
 * @coversNothing
 */
class ScriptNbatTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNbat();

        self::assertSame('Nbat', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('159', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Nabataean', $script->unicodeName());
    }
}
