<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGeok class
 *
 * @coversNothing
 */
class ScriptGeokTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGeok();

        self::assertSame('Geok', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('241', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Georgian', $script->unicodeName());
    }
}
