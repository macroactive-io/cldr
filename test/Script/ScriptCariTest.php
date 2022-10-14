<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCari class
 *
 * @coversNothing
 */
class ScriptCariTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCari();

        self::assertSame('Cari', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('201', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Carian', $script->unicodeName());
    }
}
