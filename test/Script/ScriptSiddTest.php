<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSidd class
 *
 * @coversNothing
 */
class ScriptSiddTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSidd();

        self::assertSame('Sidd', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('302', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Siddham', $script->unicodeName());
    }
}
