<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNkdb class
 *
 * @coversNothing
 */
class ScriptNkdbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNkdb();

        self::assertSame('Nkdb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('085', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
