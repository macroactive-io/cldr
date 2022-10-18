<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKthi class
 *
 * @coversNothing
 */
class ScriptKthiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKthi();

        self::assertSame('Kthi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('317', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Kaithi', $script->unicodeName());
    }
}
