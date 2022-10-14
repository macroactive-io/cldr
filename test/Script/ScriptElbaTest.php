<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElba class
 *
 * @coversNothing
 */
class ScriptElbaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptElba();

        self::assertSame('Elba', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('226', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Elbasan', $script->unicodeName());
    }
}
