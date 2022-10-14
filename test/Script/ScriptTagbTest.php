<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTagb class
 *
 * @coversNothing
 */
class ScriptTagbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTagb();

        self::assertSame('Tagb', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('373', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tagbanwa', $script->unicodeName());
    }
}
