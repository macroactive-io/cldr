<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSgnw class
 *
 * @coversNothing
 */
class ScriptSgnwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSgnw();

        self::assertSame('Sgnw', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('095', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('SignWriting', $script->unicodeName());
    }
}
