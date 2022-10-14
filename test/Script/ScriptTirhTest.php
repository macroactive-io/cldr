<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTirh class
 *
 * @coversNothing
 */
class ScriptTirhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTirh();

        self::assertSame('Tirh', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('326', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tirhuta', $script->unicodeName());
    }
}
