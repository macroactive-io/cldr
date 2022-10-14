<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPelm class
 *
 * @coversNothing
 */
class ScriptPelmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPelm();

        self::assertSame('Pelm', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('016', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
