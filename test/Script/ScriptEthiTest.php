<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEthi class
 *
 * @coversNothing
 */
class ScriptEthiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptEthi();

        self::assertSame('Ethi', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('430', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Ethiopic', $script->unicodeName());
    }
}
