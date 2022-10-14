<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRjng class
 *
 * @coversNothing
 */
class ScriptRjngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptRjng();

        self::assertSame('Rjng', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('363', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Rejang', $script->unicodeName());
    }
}
