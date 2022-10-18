<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHant class
 *
 * @coversNothing
 */
class ScriptHantTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHant();

        self::assertSame('Hant', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('502', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
