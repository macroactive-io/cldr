<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptYezi class
 *
 * @coversNothing
 */
class ScriptYeziTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptYezi();

        self::assertSame('Yezi', $script->code());
        self::assertSame(ScriptDirection::RTL, $script->direction());
        self::assertSame('192', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Yezidi', $script->unicodeName());
    }
}
