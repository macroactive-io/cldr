<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZzzz class
 *
 * @coversNothing
 */
class ScriptZzzzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptZzzz();

        self::assertSame('Zzzz', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('999', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Unknown', $script->unicodeName());
    }
}
