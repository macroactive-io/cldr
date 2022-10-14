<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptInds class
 *
 * @coversNothing
 */
class ScriptIndsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptInds();

        self::assertSame('Inds', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('610', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
