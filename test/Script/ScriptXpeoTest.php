<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptXpeo class
 *
 * @coversNothing
 */
class ScriptXpeoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptXpeo();

        self::assertSame('Xpeo', $script->code());
        self::assertSame(ScriptDirection::LTR, $script->direction());
        self::assertSame('030', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Persian', $script->unicodeName());
    }
}
