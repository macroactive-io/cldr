<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDupl class
 *
 * @coversNothing
 */
class ScriptDuplTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptDupl();

        self::assertSame('Dupl', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('755', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Duployan', $script->unicodeName());
    }
}
