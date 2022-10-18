<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKpel class
 *
 * @coversNothing
 */
class ScriptKpelTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKpel();

        self::assertSame('Kpel', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('436', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
