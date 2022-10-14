<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSogd class
 *
 * @coversNothing
 */
class ScriptSogdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSogd();

        self::assertSame('Sogd', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('141', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Sogdian', $script->unicodeName());
    }
}
